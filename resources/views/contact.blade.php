<div>
    <h1>Hello From Contact Page</h1>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<form action="{{route('contact.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Your Name"><br>
    <input type="email" name="email" placeholder="Your Email"><br>
    <button type="submit">Submit</button>
</form>
<div><a href="/">Home</a></div>
