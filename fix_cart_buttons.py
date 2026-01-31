import re
import os

target_files = [
    r"resources\views\pages\pricing.blade.php",
    r"resources\views\home\index.blade.php",
    r"resources\views\home\indexTwo.blade.php",
    r"resources\views\home\indexThree.blade.php",
    r"resources\views\home\indexFour.blade.php",
    r"resources\views\home\indexFive.blade.php",
    r"resources\views\hosting\wordpressHosting.blade.php",
    r"resources\views\hosting\vpsHosting.blade.php",
    r"resources\views\hosting\sharedHosting.blade.php",
    r"resources\views\hosting\resellerHosting.blade.php",
    r"resources\views\hosting\dedicatedHosting.blade.php",
    r"resources\views\hosting\cloudHosting.blade.php",
]

base_dir = os.getcwd()

def fix_file(rel_path):
    file_path = os.path.join(base_dir, rel_path)
    if not os.path.exists(file_path):
        print(f"Skipping {rel_path} (not found)")
        return

    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Regex to find the card block context
    # We look for package__name, then eventually price, then eventually the cartbtn div containing the anchr
    # This is tricky because of nesting, so we'll look for the sequence
    
    # Strategy: Find the cartbtn div, then look backwards for the price and name? 
    # Or find the whole block?
    
    # Let's try to match the specific "Add to Cart" link and replace it, 
    # capturing the NEAREST preceding price/name if possible.
    
    # Actually, a simpler robust way for these templates:
    # 1. Split by "card-plan" to isolate cards (roughly).
    # 2. Process each chunk.
    # 3. Join back.
    
    # But files have other content. 
    
    # Let's try a regex replace function with a pattern that captures the critical parts
    
    pattern = re.compile(r'(<h4 class="package__name">(.*?)</h4>.*?<h5 class="card-plan__price">.*?([\d\.]+).*?</h5>.*?<div class="card-plan__cartbtn">\s*)(<a href="#".*?>.*?</a>)(\s*</div>)', re.DOTALL)
    
    def replacer(match):
        prefix = match.group(1)
        name_raw = match.group(2)
        price_raw = match.group(3) # This might capture garbage if not careful, but the [\d\.]+ usually works for immediate price
        
        # Refine name
        name = re.sub(r'<[^>]+>', '', name_raw).strip()
        
        # Refine price - search for number in the price block if the group captured more
        # But our regex expects digits/dots immediately. 
        # Wait, the template has <sup>$</sup> 3.29. 
        # So the regex `.*?([\d\.]+).*?` inside h5 might catch 3.29 correctly if it skips the tags.
        
        # Let's relax the price regex
        # h5 content: <sup>$</sup> 3.29 <sub>/ mo</sub>
        # We need to extract 3.29
        
        # Better extraction from the full match text if needed, but let's trust the capture for a moment
        # Actually, let's use a broader capture for h5 content and parse it in python
        return match.group(0) # Logic below
        
    # Patterns to match different layouts
    patterns = [
        # Standard Card Style (Home, Pricing)
        r'(<h4 class="package__name">\s*(?P<name>.*?)\s*</h4>.*?<h5 class="card-plan__price">(?P<price_content>.*?)</h5>.*?<div class="card-plan__cartbtn">\s*)(?P<btn><a href="#".*?>.*?</a>)(\s*</div>)',
        # Table Style (Hosting Pages)
        r'(<span class="package__type">\s*(?P<name>.*?)\s*</span>.*?<h5 class="card-plan__price">(?P<price_content>.*?)</h5>.*?<div class="card-plan__cartbtn">\s*)(?P<btn><a href="#".*?>.*?</a>)(\s*</div>)'
    ]
    
    new_content = content
    total_replacements = 0

    # We use re.sub with a function
    def form_builder(m):
        prefix = m.group(1)
        name = re.sub(r'<[^>]+>', '', m.group('name')).strip()
        price_content = m.group('price_content')
        
        # Extract price number
        price_match = re.search(r'[\d\.]+', price_content)
        price = price_match.group(0) if price_match else "0.00"
        
        # Keep original button text style BUT change it to a button element
        original_btn = m.group('btn')
        # preserve class and inner html
        class_match = re.search(r'class="(.*?)"', original_btn)
        classes = class_match.group(1) if class_match else "btn-premium w-100 justify-content-center"
        
        inner_html_match = re.search(r'>(.*?)</a>', original_btn, re.DOTALL)
        inner_html = inner_html_match.group(1) if inner_html_match else "Add to Cart"
        
        form = f'''<form action="{{{{ route('cart.add') }}}}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="{name}">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="{price}">
                <button type="submit" class="{classes}">{inner_html}</button>
            </form>'''
            
        return f"{prefix}{form}{m.group(5)}"

    for regex in patterns:
        new_content, count = re.subn(regex, form_builder, new_content, flags=re.DOTALL)
        total_replacements += count
    
    if total_replacements > 0:
        with open(file_path, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"Updated {rel_path} ({total_replacements} replacements)")
    else:
        print(f"No matches in {rel_path}")

for f in target_files:
    fix_file(f)
