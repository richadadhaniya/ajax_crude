<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form method="POST" action="{{route('store')}}">
        @csrf
        <table border="1">
            <tr>
                <td>
            <label for="city">city</label>
            <select name="city">
                <option>rajkot</option>
                <option>ahamdabad</option>
                <option>baroda</option>
            </select>
                </td>
        </tr>
        <tr>
            <td>
            <label for="vehicle">vehicle</label>
            <select name="vehicle">
                <option>Bike</option>
                <option>Car</option>
                <option>Bus</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>
            <label for="date">Date</label>
            <input type="date" name="date">
        </td>
    </tr>
        <tr>
            <td>
            <label for="booking_type">Booking Type</label>
            <input type="radio" name="booking_type" value="full time">full time
            <input type="radio" name="booking_type" value="half Day">half day
            <input type="radio" name="booking_type" value="hourly">hourly
            </td> 
        </tr>
        <tr>
            <td>
            <label for="half-day">Half day</label>
            <select name="half_day">
                <option>9AM to 1PM</option>
                <option>2PM to 9PM</option>
                
            </select>
        </td>
        </tr>
        <tr>
            <td>
             <label for="hourly">Hourly</label>
            <select name="hourly">
                <option>9AM </option>
                <option>10AM</option>
                
            </select>
        </td>
        <td>
            <label for="hourly">To time</label>
            <select name="hourly">
                <option>10AM</option>
                <option>11AM</option>
                
            </select>
        </td>
        </tr>
        <tr>
            <td>
            <label for="destination">Destination</label>
            <input type="text" name="destination">
        </td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="submit" value="save">
            </td>
        </tr>

            
        </table>
    </form>
</body>
</html>


