<?php
require_once("partials/header.php");
?>

<?php
$url = "https://restcountries.com/v3.1/all";

// Send a GET request to the API endpoint
$response = file_get_contents($url);

// Check if the request was successful
if ($response !== false) {
    // Get the JSON response
    $data = json_decode($response, true);

    // Process the data
    foreach ($data as $country) {
        // $name = $country['name']['common'];
        // $capital = isset($country['capital']) ? $country['capital'][0] : 'N/A';
        // $population = isset($country['population']) ? $country['population'] : 'N/A';
        // echo "Country: $name" . PHP_EOL;
        // echo "Capital: $capital" . PHP_EOL;
        // echo "Population: $population" . PHP_EOL;
        // echo "---" . PHP_EOL;
    }
} else {
    // Print an error message if the request was not successful
    echo "Error: You are offline.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>REST Countries API</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .dashboard {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            text-align: center;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .search-field {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
        }

        form {
            position: relative;
        }

        input {
            width: 300px;
            padding: 10px;
            font-size: 18px;
            color: #333;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #999;
            outline: none;
            transition: border-color 0.3s;
        }

        label {
            position: absolute;
            top: 0;
            left: 10px;
            font-size: 16px;
            color: #999;
            pointer-events: none;
            transition: all 0.3s;
        }

        input:focus~label,
        input:valid~label {
            top: -20px;
        }

        @media (max-width: 576px) {
            input {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="dashboard">
        <h1>Discover the wonders of your new country and explore its rich culture, diverse landscapes, and vibrant communities. Get ready to embark on a fascinating journey to uncover the hidden gems and fascinating facts about your own beloved new homeland.</h1>

        <div class="search-field">
            <form id="countryForm">
                <input type="text" id="countryInput" required>
                <label for="countryInput">Where in the world are you?</label>
                <button type="submit" class="btn btn-outline-secondary">Search</button>
            </form>
        </div>

        <div id="countryInfo"></div>
    </div>

    <script>
        $(document).ready(function () {
            $('#countryForm').submit(function (event) {
                event.preventDefault();

                var country = $('#countryInput').val();
                var apiUrl = 'https://restcountries.com/v3.1/name/' + country;

                $.ajax({
                    url: apiUrl,
                    type: 'GET',
                    success: function (response) {
                        if (response.length > 0) {
                            var countryData = response[0];
                            var name = countryData.name.common;
                            var capital = countryData.capital ? countryData.capital[0] : 'N/A';
                            var population = countryData.population ? countryData.population : 'N/A';
                            var flagUrl = countryData.flags.png;

                            var countryInfo = `
                                <h2>Country Information</h2>
                                <p><strong>Country:</strong> ${name}</p>
                                <p><strong>Capital:</strong> ${capital}</p>
                                <p><strong>Population:</strong> ${population}</p>
                                <img src="${flagUrl}" alt="Flag of ${name}">
                            `;

                            $('#countryInfo').html(countryInfo);
                        } else {
                            $('#countryInfo').html('<p>No information found for the specified country.</p>');
                        }
                    },
                    error: function () {
                        $('#countryInfo').html('<p>Enter a the correct country name.</p>');
                    }
                });
            });
        });
    </script>
</body>

</html>

<?php
require_once("partials/footer.php");
?>
