<div>
    {{-- The Master doesn't talk, he acts. --}}

    <p>This is from the login page</p>

    <form action="">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" id="">
        <label for="password">Password</label>
        <input type="password" name="password" id="">
        <br>
        <input type="submit" value="Submit">
        <p>Please Register <a href="{{ route('register') }}">HERE</a></p>
    </form>

</div>
