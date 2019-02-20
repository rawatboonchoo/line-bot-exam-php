</head>
<body>

<div id="response">
    <pre></pre>
</div>

<form id="my-form">
<p>
<select name="method" id="method">
<option value="SMS">SMS</option>
<option value="CALL">CALL</option>
</select>
</p>
<p>
<select name="countryCode" id="countryCode">
<option value="MY">MY</option>
<option value="SG">SG</option>
<option value="ID">ID</option>
<option value="TH">TH</option>
<option value="VN">VN</option>
<option value="KH">KM</option>
<option value="PH">PH</option>
<option value="MM">MM</option>
</select>
</p>

<p>
<input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone +66" value="66945499432" />
</p>
<p>
<input type="text" id="templateID" name="templateID" value="" />
</p>
<p>
<input type="text" id="numDigits" name="numDigits" value="5" />
</p>
    <button type="submit">Submit</button>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    (function($){
        function processForm( e ){
            console.log('click');
            $.ajax({
                url: 'https://api.grab.com/grabid/v1/phone/otp',
                dataType: 'text',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: $(this).serialize(),
                success: function( data, textStatus, jQxhr ){
                    $('#response pre').html( data );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

            e.preventDefault();
        }

        $('#my-form').submit( processForm );
    })(jQuery);
</script>
</body>
</html>
