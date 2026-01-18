<div>
    <h1>Session Profile</h1>
    
    @if ( session('user') )
        <h1>Welcome, {{ session('user') }}</h1>
    @else
        <h1>No User Found in session <a href="sessionlogin">Login</a> </h1>    
    @endif
    
    <a href="sessionlogout">Logout</a>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
