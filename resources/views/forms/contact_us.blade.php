<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">Contact Us</h1>

        <div class="row justify-content-center">
            <div class="col-md-7 mb-5">
                @include('forms.errors')
                <form action="{{ route('contact_us_data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" placeholder="Name" name="name" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" accept=".png,.jpg,.jpeg" name="image" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label>Message</label>
                        <textarea placeholder="Message" name="message" class="form-control"  rows="6"></textarea>
                    </div>
                    <button class="btn btn-primary">Send</button>
                </form>
            </div>

            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8443.596905869106!2d34.43369146873516!3d31.512962442136672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d9f5592fe73680e!2z2YXYt9i52YUg2YjYrNio2KrZiiDZhNmE2YXYo9mD2YjZhNin2Kog2KfZhNi62LHYqNmK2Kkg2YjYp9mE2LTYp9mI2LHZhdin!5e0!3m2!1sen!2s!4v1658139870186!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>

</body>
</html>
