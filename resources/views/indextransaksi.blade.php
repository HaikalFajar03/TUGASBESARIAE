<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            color: #333;
            text-align: center;
            padding: 20px 0;
        }

        form {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        form div {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="date"], input[type="number"], textarea {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .text-center {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-round {
            border-radius: 20px;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
        }

        .container-transaksi {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .transaksi-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .transaksi-table thead tr {
            background-color: #000;
            color: white;
        }

        .transaksi-table th,
        .transaksi-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .transaksi-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .transaksi-table tbody tr:hover {
            background-color: #ddd;
        }

    </style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <span class="navbar-toggle" type="text" data-toggle="collapse" data-target="#custom-collapse">Toggle navigation</span>
            <a class="navbar-brand" >UangQu</a>
          </div>

          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#totop">Home</a></li>
              <li><a class="section-scroll" href="/#services">Services</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="main">
        <section class="module bg-dark-30 about-page-header" data-background="assets/images/about_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Transaksi</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <h1>Transaksi</h1>
            <div class="text-center">
              <a href="/createtransaksi" class="btn btn-b btn-round">Tambah Transaksi</a>
            </div>
            <form id="filter-form" action="/filtertransaksi" method="get" style="display: flex; justify-content: space-between; align-items: center;">
              <div style="position: relative;">
                <input type="text" id="search" name="search" placeholder="Cari...">
                <input type="submit" class="btn btn-b btn-round" value="Filter">
              </div>
            </form>
            <div class="container-transaksi">
              <table class="transaksi-table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="transaksi-body">
                  <!-- Data transaksi akan ditampilkan di sini -->
                </tbody>
              </table>
            </div>
          </div>
        </section>

        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="https://www.facebook.com/themefisher"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a><a href="#"><i class="fa fa-vimeo"></i></a></div>
              </div>
            </div>
          </div>
          <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
        </footer>
      </div>
    </main>

    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
      // Fungsi untuk mengambil dan menampilkan data transaksi
      function loadTransactions(filter = '') {
        $.ajax({
          url: `http://127.0.0.1:8000/api/transactions${filter}`,
          method: 'GET',
          success: function(data) {
            const tbody = $('#transaksi-body');
            tbody.empty();
            if (data.length === 0) {
              tbody.append('<tr><td colspan="6">No transactions found.</td></tr>');
            } else {
              data.forEach(transaction => {
                tbody.append(`
                  <tr>
                    <td>${transaction.id}</td>
                    <td>${transaction.category}</td>
                    <td>${transaction.amount}</td>
                    <td>${transaction.date}</td>
                    <td>${transaction.description}</td>
                    <td>
                      <button onclick="editTransaction(${transaction.id})">Edit</button>
                      <button onclick="deleteTransaction(${transaction.id})">Delete</button>
                    </td>
                  </tr>
                `);
              });
            }
          },
          error: function(err) {
            console.error('Error fetching transactions', err);
          }
        });
      }

      // Fungsi untuk mengedit transaksi
      function editTransaction(id) {
        const newAmount = prompt('Enter new amount:');
        if (newAmount) {
          $.ajax({
            url: `http://127.0.0.1:8000/api/transactions/${id}`,
            method: 'PUT',
            contentType: 'application/json',
            data: JSON.stringify({ amount: newAmount }),
            success: function() {
              alert('Transaction updated successfully');
              loadTransactions();
            },
            error: function(err) {
              console.error('Error updating transaction', err);
            }
          });
        }
      }

      // Fungsi untuk menghapus transaksi
      function deleteTransaction(id) {
        if (confirm('Are you sure you want to delete this transaction?')) {
          $.ajax({
            url: `http://127.0.0.1:8000/api/transactions/${id}`,
            method: 'DELETE',
            success: function() {
              alert('Transaction deleted successfully');
              loadTransactions();
            },
            error: function(err) {
              console.error('Error deleting transaction', err);
            }
          });
        }
      }

      // Fungsi untuk memfilter transaksi
      $('#filter-form').submit(function(event) {
        event.preventDefault();
        const search = $('#search').val();
        const filter = search ? `?search=${encodeURIComponent(search)}` : '';
        loadTransactions(filter);
      });

      // Memuat data transaksi saat halaman dimuat
      $(document).ready(function() {
        loadTransactions();
      });
    </script>
  </body>
</html>
