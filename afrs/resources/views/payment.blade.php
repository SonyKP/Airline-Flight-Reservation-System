<script src="https://www.paypal.com/sdk/js?client-id=ARqYrGyHJ9VCi708GhBEJzHqPztlBKCt6JYFmM6LR_I8ObEpYmZdF3Y3llpPcutXsKUI1Oex29d0KQlp"></script>
<script>paypal.Buttons().render('body');</script>

<script>paypal.Buttons({
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("/success")
        })
    },
    onCancel: function (data) {
        window.location.replace("/success")
    }
}).render('#paypal-payment-button');</script>


<a href="{{'ticket'.session('LoggedUser')}}" text-decoration="none">View Ticket</a>
<!-- <a href="{{url('ticket')}}" text-decoration="none">View Ticket</a> -->