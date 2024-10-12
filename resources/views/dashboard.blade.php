<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRYPTICKER - Buy & Sell Digital Assets In The CRYPTICKER</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/dashboard-content.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>

    <main>
        <article>

            <!-- Trend Section -->
            <br><br><br><br><br><br><br><br>

            <section class="section trend" aria-label="crypto trend" data-section>
                <div class="container">
                    <div class="trend-tab">

                        <ul class="tab-content" id="currency-list">
                            <!-- Currencies will be populated here using JavaScript -->
                        </ul>

                        <!-- Validation Error Display -->
                        <div class="error-message" style="color: red; display: none;" id="error-message">
                            <!-- Error message will be shown here if any -->
                        </div>

                        <!-- Submit Button -->
                        <div class="submit-wrapper">
                            <button type="button" class="submit-btn" id="submit-btn">Submit</button>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Custom JS -->
            <script src="assets/js/script.js" defer></script>

            <!-- Google Ads -->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5072591308500615" crossorigin="anonymous"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5072591308500615"
                 data-ad-slot="1012478234"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

            <!-- Currency Fetch and Display -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const apiURL = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=50&page=1&sparkline=false';

                    fetch(apiURL)
                        .then(response => response.json())
                        .then(data => {
                            const currencyList = document.getElementById('currency-list');
                            currencyList.innerHTML = '';

                            data.forEach((coin, index) => {
                                const coinCardHTML = `
                                    <li>
                                        <div class="trend-card">
                                            <div class="card-title-wrapper">
                                                <img src="${coin.image}" width="24" height="24" alt="coin logo">
                                                <a href="#" class="card-title">
                                                    ${coin.name} (${coin.symbol.toUpperCase()}/USD)
                                                </a>
                                            </div>

                                            <data class="card-value">USD ${coin.current_price.toFixed(2)}</data>

                                            <div class="card-analytics">
                                                <data class="current-price">${coin.current_price.toFixed(2)}</data>
                                                <div class="badge ${coin.price_change_percentage_24h > 0 ? 'green' : 'red'}">
                                                    ${coin.price_change_percentage_24h.toFixed(2)}%
                                                </div>
                                            </div>

                                            <!-- Checkbox for selecting currency -->
                                            <div class="currency-checkbox">
                                                <input type="checkbox" name="currencies[]" value="${coin.id}" id="currency-${index}">
                                                <label for="currency-${index}">Select</label>
                                            </div>
                                        </div>
                                    </li>
                                `;
                                currencyList.insertAdjacentHTML('beforeend', coinCardHTML);
                            });
                        })
                        .catch(error => console.error('Error fetching crypto data:', error));
                });
            </script>

            <!-- Ionicons -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </article>
    </main>

</body>
</html>
</x-app-layout>
