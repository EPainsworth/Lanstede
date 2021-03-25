<div class="orderContainer">
    <h1>U BENT INGELOGD!</h1>
    <hr class="solid">
    <h2>KIES HIER UW ETEN EN DRINKEN</h2>
<form method="GET" action="/">
    <div class="dropDownButton">
        <select>
            <option value="0" selected>Kies je eten:</option>
            @foreach($drinks as $drink)


                <option value="{{$drink->drinks_id}}">{{$drink->drinks_name}}</option>

            @endforeach
        </select>
    </div>
    <div class="dropDownButton2">
        <select>
            <option value="0" selected>Kies je drankje:</option>
            <option value="1">Cola</option>
            <option value="2">Fanta</option>
        </select>
    </div>
    <div class="orderSumbit">
        <input type="submit">
    </div>
</form>
</div>
