
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="text-center mt-3">
    <h1 class="text-danger">Hello From About Page</h1>
</div>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

        <!-- All error at the top -->
             <!-- @if ($errors->any())
                <div class="text-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->
            
             <form action ="{{route('about.store')}}" method="post">
                 @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label  ">Name</label>
                    <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                    @error('name')
                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label ">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                    @error('password')
                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                    @enderror
               </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<div><a href="/">Home</a></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


