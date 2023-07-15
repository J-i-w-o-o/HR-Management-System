<?php

$url = 'https://time-attendance.prod.jibble.io/v1/Timesheets?date=2023-07-14&period=Day';

$accessToken = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IjkxOTQwQ0I1M0ZFQjhEMERGNEI1QzZBODdERjM4NkNGNDdBQzE5MjciLCJ0eXAiOiJhdCtqd3QiLCJ4NXQiOiJrWlFNdFRfcmpRMzB0Y2FvZmZPR3owZXNHU2MifQ.eyJuYmYiOjE2ODkzMjU4MDYsImV4cCI6MTY4OTMyOTQwNiwiaXNzIjoiaHR0cHM6Ly9pZGVudGl0eS5wcm9kLmppYmJsZS5pbyIsImF1ZCI6ImFwaTEiLCJjbGllbnRfaWQiOiJjNTk5M2MyNS1kZjBkLTQ5YTMtYmM2YS01MjU1MDAzNGNlMjUiLCJvcmdpZCI6ImYzZGM3YWYzLWE4NjMtNGNmZi05ZmVjLTUzYWExZWE1ZWU1ZiIsInByc2lkIjoiZWIwMTJkYzctNGQ5Ni00ZjQwLWJhOGEtZDY2YTllOWU4ZDZkIiwic3ViIjoiNGQ2OTI4YWEtMDY1ZS00M2UzLWI4OGItMDRiNjJlZmNkOTZkIiwic2NvcGUiOlsiYXBpMSJdLCJhbXIiOlsiY3JlZCJdfQ.PB22PGWR4RSuoCJeRcRlPXpmRnklGiW5NcbeeMBEURKZNG5hH8kH4qJu3bwJusu7E-8tMZIuw2xdaYeYFuq9G6k7lJwb0AjA5UiW5zI4pTNhqA9YGqXmlKe1vVXRjC4zhW4nv1x3C8_S0j6dDIP1DpWiM69pilhNTrx5py86x6wy3Ei2EdAC5PtAqNyQAMVxo8WCAcanURH6MGgqGjESCCwvnkNnxP71N5D5zeAcwuN3Bflj6jyH-NwbiT-MF-QTYGeEQIRKDDlq6ddggMyU9GT-qsQJVQw_O2fPgd1DAGAbMnAhR08sNZnq-D2lYdS1TaDfSA9TWxUryYWcj7SqPdOe7H6Bo55e0BpJJxRtabs7vWuXceg15KpQhzb-3_bTf-DobYaAl-qwGbWWN5K4Jnt5YC7vGAksA6iWAvpTtFjbm0iGs6rbDNWxHhhO4V-o9F5f3dOxUgIBFdt0sZ7idcMrZrO_NG1WRoElpRy_IEW0UzSieQ3JIFTo0EL-R6un8rkWYoin6z5CpOo3WywT2s4DoyG62CiUcoIfIXDFwsColfT9FYZyGt4gVZjJ7TY51TcaYO6bEeZv9HJrgHJVsQCHJpl59FincoyZaskTuHd6ckOnfW3R_l7LwvNpNKpr9foJM41c8eabZh5FYfmKIR2CFGPNNiHYuwlGdG7A5Ac';

?>

<script>
  function fetchTimeSheets() {
    var url = '<?php echo $url; ?>';
    var accessToken = '<?php echo $accessToken; ?>';

    fetch(url, {
      headers: {
        'Authorization': 'Bearer ' + accessToken,
        'Content-Type': 'application/json'
      }
    })
    .then(response => response.json())
    .then(data => {
      if (data.value) {
        var timeSheets = data.value;
        var count = timeSheets.length;

        document.getElementById('count').textContent = count;

        setTimeout(fetchTimeSheets, 5000); // Fetch every 5 seconds
      }
    })
    .catch(error => {
      console.log('Error: Unable to fetch time sheets');
      console.error(error);
    });
  }

  // Start fetching time sheets
  fetchTimeSheets();
</script>

<p>Number of Time Sheets: <span id="count">Loading...</span></p>
