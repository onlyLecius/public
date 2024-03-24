@if($deposit)
    <script>
        function validatePayment(){
            let hash    = "{{ $deposit->hash }}";
            let url     = "{{ config('SYS_URL') }}";

            fetch(url + '/api/deposit/validate/'+hash)
                .then(res => {
                    return res.json()
                })
                .then(res => {
                    switch(res._status){
                        case "PAID_OUT":
                        case "CHARGEBACK":
                        case "CANCELED":
                            location.reload();
                        break;
                    }
                })
                .catch(()=>{
                    location.reload();
                })
        }

        setInterval(() => {
            validatePayment();
        }, (20 * 1000));

    </script>
@endif

