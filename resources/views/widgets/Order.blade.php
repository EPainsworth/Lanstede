<div class="orderContainer">
    <h1>YOU ARE LOGGED IN!</h1>
    <hr class="solid">
    <h2>CHOOSE YOUR FOOD</h2>
<form method="post">
    @csrf
    <div class="dropDownButton">
        <select name="snack">
            <option value="0" selected>Choose your food:</option>
            @foreach($food as $foods)


                <option value="{{$foods->food_id}}">{{$foods->food_name}}</option>

            @endforeach
        </select>
    </div>
    <div class="orderSumbit">
        <input type="submit" name="Submit" value="Sumbit" >
    </div>
</form>
</div>
