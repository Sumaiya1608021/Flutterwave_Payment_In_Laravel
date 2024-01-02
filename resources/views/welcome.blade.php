<h3>Buy me Coffee</h3>
<form method="POST" action="{{ route('paynow') }}">
    {{ csrf_field() }}

    <input name="name" placeholder="Name" />
    <input name="email" type="email" placeholder="Your Email" />
    <input name="phone" type="tel" placeholder="Phone number" />

    <input type="submit" value="Buy me Coffee" />
</form>