<!DOCTYPE html>
<html lang="en">

    @include('elements.head')

<body>
    
    <div class="rts-error-section">
        <div class="section-inner">
            <img src="{{ asset('assets/images/error.webp') }}" width="630" alt="">
            <div class="wrapper-para mt--45">
                <h3 class="title">Page Not Found</h3>
                <p class="disc">
                    We're sorry, the page you requested could not be found <br> please go back to the homepage
                </p>
                <a href="{{ route('index') }}" class="rts-btn btn__long btn-primary m-auto">Back to Home</a>
            </div>
        </div>
    </div>

</body>

</html>