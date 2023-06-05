<html>
<head>
    <style>
        body {
            font-family: DejaVu Serif, sans-serif;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<div style="position: relative; padding-bottom: 105px">
    <div style="position: absolute; left: 0">
        <h3>Ezytick - Online Ticket System</h3>
        <h4 style="width: 168px; overflow: hidden">{{\Illuminate\Support\Facades\Hash::make($ticket->name)}}</h4>
    </div>
    <img width="120" style="position:absolute; right: 0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png" alt="">
</div>
<hr style="color: #13151f">
{!! QrCode::size(500)->generate(route('home.show', $ticket)) !!}
<h2>SO SHE STOOD</h2>
<div style="display: flex">
    <div style="float: left"><img src="{{$ticket->image}}" width="250" alt=""></div>
    <div style="float: left; margin-left: 20px">
        <p><b> Имя: {{auth()->user()->name}}</b></p>
        <p><b> Sector: {{$order->category_id}}</b></p>
        <p><b> Place: {{$order->place_id}}</b></p>
        <p><b> Price: {{$order->price}}₸</b></p>
    </div>
</div>

<hr style="color: #13151f; margin-top: 400px">
<p style="font-size: 12px; border: 1px solid #ccc; padding: 10px"><b> Возврат билетов, инициированный покупателем</b> <br>

    Возврат денежных средств при отказе потребителя от посещения мероприятия и возврате билетов осуществляется с удержанием из номинальной стоимости билетов расходов, фактически понесенных организатором мероприятия на дату возврата такого билета. Сервисный сбор не возвращается. <br>

    В случае возврата билета, приобретенного зрителем на сайте eazytick.kz по своей инициативе, ему необходимо обратиться к оператору Call-центра по номеру телефона, указанному на сайте; <br>
    Заявления принимаются только от лица, зарегистрированного на сайте и/или оформившего заказ, или от лица, указанного как владелец заказа, по которому оформляется возврат денежных средств; <br>
    В случае возврата электронного билета, возврат средств осуществляется на карту, с которой производилась оплата. Сервисный сбор не возвращается. <br>
    В случае переноса Мероприятия вследствие обстоятельств непреодолимой силы (ФОРС–МАЖОР), Заказчик принимает и соглашается с тем, что деньги подлежат возврату лишь в случае, если они не были перечислены ранее Организатору, возврат осуществляется за минусом 7% от номинальной стоимости Билета, сервисный сбор, если применялся, не возвращается.</p>
</body>
</html>
