<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="purple">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Edit Guide Book | ESA 19</title>
</head>
<body> 
    <style>
        body {
            background: rgba(0, 0, 0, 0.1);
        }
    </style>
    
    <div data-aos="zoom-in" data-aos-duration="1000" class="row d-flex justify-content-center align-items-center p-5" style="height: 100vh; width: 100%">
        <div class="col-lg-5 bg-light" style="border-radius: 12px">
            <h2 class="text-center pt-3">
                Edit guide book
            </h2>
            <p class="text-center my-4" style="font-size: 25px">
                <form action="{{ url('/admin/editGB/'.$data->id) }}" method="POST">
                    @csrf
                    <input type="text" name="guide_book" value="{{ url($data->guide_book) }}" class="form-control mx-2 mb-3">
                    <button class="btn btn-success" style="width: 100%">
                        Update
                    </button>
                </form>
            </p>
        </div>
    </div> 


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>