<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TrustWealth Transaction Receipt</title>
    <link href="https://up2client.com/envato/digital-invoice-2.0/main-file/assets/images/logo/Fevicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        html {
            scroll-behavior: smooth;
            -webkit-text-size-adjust: 100%;
        }

        body {
            background: #F8F9FD;
            width: auto;
            height: 100%;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            margin: 0;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        a:focus,
        a {
            outline: none;
            text-decoration: none;
            color: #ffffff;
            cursor: pointer;
        }

        a.contact_focus,
        a.email_focus {
            color: #12151C;
        }

        svg,
        img {
            vertical-align: middle;
        }

        section {
            padding: 50px 0;
            position: relative;
            width: 100%;
            height: 100%;
        }

        .mtb-0 {
            margin-bottom: 0;
            margin-top: 0;
        }

        .medium-font {
            font-size: 16px;
            line-height: 24px;
        }

        .md-lg-font {
            font-size: 20px;
            line-height: 24px;
        }

        .sm-text {
            font-size: 18px;
            line-height: 24px;
        }

        .sm-md-text {
            font-size: 14px;
            line-height: 22px;
        }

        .b-text {
            color: #12151C;
        }

        .second-color {
            color: #505050;
        }

        .primary-color {
            color: #00BAFF;
        }

        .third-color {
            color: #A2A2A2;
        }

        /************************* 2.Header CSS **************************/

        .inter-400 {
            font-weight: 400;
        }

        .inter-700 {
            font-weight: 700;
        }

        .inter-500 {
            font-weight: 500;
        }

        .invoice-container {
            max-width: 880px;
            margin: 0 auto;
            padding: 30px 15px;
        }

        .content-min-width {
            background: #12151C;
            border-radius: 20px 20px 0 0;
            padding: 50px 50px 30px;
        }

        .logo img {
            height: 60px;
            width: auto;
        }

        .invoice-logo-content {
            display: flex;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: space-between;
            align-items: center;
        }

        .invo-head-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .invoice-content-wrap {
            background: #fff;
            position: relative;
            height: 100%;
            width: 100%;
        }

        .invo-num-title {
            width: 60%;
        }

        .invo-no {
            width: 50%;
            font-size: 16px;
            line-height: 24px;
        }

        .invo-num {
            color: #FFFFFF;
            padding-left: 20px;
            font-size: 16px;
            line-height: 24px;
        }

        .invo-num-dark {
            color: #A2A2A2;
            padding-left: 20px;
            font-size: 16px;
            line-height: 24px;
        }

        .invo-head-wrap.invoi-date-wrap {
            margin-top: 20px;
        }

        .invo-cont-wrap {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
        }

        .invoice-header-contact {
            display: inline-flex;
            padding-top: 36px;
        }

        .invo-cont-wrap.invo-contact-wrap {
            margin-right: 30px;
        }

        .invo-social-name {
            padding-left: 10px;
        }

        .text-invoice {
            background-image: url('https://up2client.com/envato/digital-invoice-2.0/main-file/assets/images/header/back-img.svg');
            background-repeat: no-repeat;
            width: 100%;
            height: auto;
            top: auto;
            bottom: 0;
            left: 0;
            right: 0;
            background-size: auto;
            background-position: bottom center;
        }


        /************************* 3.Invoice Content CSS **************************/

        .container {
            max-width: 850px;
            margin: 0 auto;
            padding: 0 50px;
        }

        .invo-to {
            color: #12151C;
        }

        .invo-to-owner {
            color: #00BAFF;
            margin: 10px 0;
        }

        .invoice-owner-conte-wrap {
            display: flex;
            justify-content: space-between;
            -webkit-box-pack: justify;
        }

        .invo-to-wrap {
            text-align: left;
        }

        .invo-pay-to-wrap {
            text-align: right;
        }

        .invo-owner-address {
            color: #505050;
        }

        .table-wrapper {
            padding: 50px 0 20px;
        }

        .invoice-table {
            border-collapse: collapse;
            width: 100%;
            max-width: 750px;
            margin: 0 auto;
            white-space: nowrap;
            background-color: #ffffff;
        }

        .invoice-table td,
        .invoice-table th {
            text-align: left;
        }

        .invoice-table td {
            color: #505050;
            font-size: 14px;
            line-height: 22px;
            padding: 20px 0;
        }

        td.invo-tb-data.third-color {
            color: #A2A2A2;
        }

        .invoice-table-dark td {
            color: #505050;
            /*color: #A2A2A2;*/
            font-size: 14px;
            line-height: 22px;
            padding: 20px 0;
        }

        .invoice-table thead th {
            color: #12151C;
            padding: 10px 0;
        }

        .invo-tb-body .invo-tb-row {
            border-bottom: 1px solid #888888;
        }

        .invo-tb-body .invo-tb-row:last-child {
            border-bottom: none;
        }

        .invo-tb-body {
            border-bottom: 2px solid #12151C;
            border-top: 2px solid #12151C;
        }

        .serv-wid {
            width: 32%;
        }

        .desc-wid {
            width: 36%;
        }

        .qty-wid {
            width: 10%;
        }

        .pric-wid {
            width: 12%;
        }

        .tota-wid {
            width: 10%;
        }

        .invoice-table th.total-head,
        .invoice-table td.total-data {
            text-align: right;
        }

        .addi-info-title {
            color: #12151C;
            margin: 0 0 10px;
        }

        .add-info-desc {
            font-size: 14px;
            line-height: 22px;
            color: #505050;
        }

        .add-info-desc-dark {
            font-size: 14px;
            line-height: 22px;
            color: #A2A2A2;
        }

        .invo-total-price {
            font-weight: 500;
        }

        .invo-addition-wrap {
            display: flex;
        }

        .invo-add-info-content {
            width: 50%;
        }

        .invo-bill-total {
            width: 50%;
            position: relative;
        }

        .invo-bill-total table {
            width: 85%;
            border-collapse: collapse;
            white-space: nowrap;
            float: right;
        }

        .invo-total-table td.invo-total-data,
        .invo-total-table td.invo-total-price {
            text-align: right;
        }

        .tax-row.bottom-border,
        .disc-row.bottom-border {
            border-bottom: 2px solid #12151C;
        }

        .hotel-sub {
            padding-left: 70px !important;
        }

        .invo-total-table .tax-row td,
        .invo-grand-total td {
            padding: 20px 0;
        }

        /************************* 4.Bottom Content CSS **************************/

        .agency-bottom-content {
            background: #FFFFFF;
            border-radius: 0px 0px 20px 20px;
            padding: 50px 0;
        }

        .invo-btns {
            display: inline-flex;
            align-items: center;
            margin: 0 1px;
        }

        .invo-buttons-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .invo-buttons-wrap .invo-btns .print-btn {
            background: #00BAFF;
            padding: 12px 24px;
            border-radius: 24px 0px 0px 24px;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
        }

        .invo-buttons-wrap .invo-btns .download-btn {
            background: #04359d;
            padding: 12px 24px;
            border-radius: 12px;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
        }

        .invo-btns span {
            padding-left: 10px;
        }

        .invo-note-wrap,
        .note-title {
            display: flex;
            align-items: center;
        }

        .invo-note-wrap {
            padding-top: 30px;
        }

        .note-title span,
        .note-desc {
            padding-left: 10px;
        }

        /************************* 5.Hotel Booking CSS **************************/

        .item-wid {
            width: 18%;
        }

        .invoice-table th.rate-title,
        .invoice-table td.rate-data {
            text-align: center;
        }

        .invo-hotel-title,
        .invo-hotel-desc {
            font-size: 14px;
            line-height: 22px;
        }

        .detail-col {
            width: 247px;
            background: #F5F5F5;
            padding: 9px 10px;
        }

        .booking-content-wrap {
            display: flex;
            justify-content: space-between;
        }

        .booking-content-wrap.second-row {
            padding-top: 4px;
        }

        .invo-hotel-book-wrap {
            padding-top: 50px;
        }

        .payment-desc {
            font-size: 14px;
            line-height: 22px;
            padding: 20px 0 10px;
        }

        .payemnt-wid,
        .date-wid,
        .trans-wid,
        .amount-wid {
            width: 33.33%;
            text-align: left;
            padding: 10px 0;
        }

        .invo-payment-table {
            border-collapse: collapse;
        }

        .payment-table-wrap {
            padding: 10px 20px;
            background: #F5F5F5;
            margin-top: 35px;
            position: relative;
            z-index: 10;
        }

        .invo-paye-row {
            border-top: 2px solid #12151C;
        }

        /************************* 6.Restaurant Bill CSS **************************/

        .invoice-header.back-img-invoice {
            content: '';
            position: relative;
            background-image: url('../images/header/back-img-one.png');
            width: 100%;
            height: auto;
            top: 0;
            bottom: auto;
            left: 0;
            right: 0;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .invoice-header.back-img-invoice:before,
        .invoice-header.stadium-header:before,
        .invoice-header.car-header-img:before {
            content: '';
            position: absolute;
            background-color: #FFF;
            opacity: 0.8;
            width: 100%;
            height: 100%;
            left: 0;
            right: 0;
            top: 0;
            border-radius: 20px 20px 0px 0px;
        }

        .back-img-invoice .invoice-logo-content,
        .back-img-invoice .invoice-header-contact,
        .car-header-img .invoice-logo-content,
        .car-header-img .invoice-header-contact {
            position: relative;
            z-index: 8;
        }

        .sno-wid {
            width: 14%;
        }

        .re-desc-wid {
            width: 22%;
        }

        .re-price-wid {
            width: 14%;
        }

        .re-qty-wid {
            width: 15%;
        }

        .discount-price {
            color: #00D061;
        }

        .disc-row td {
            padding-bottom: 20px;
        }

        .payment-wrap {
            border: 2px solid #12151C;
            padding: 0px 20px 0px 20px;
            display: inline-block;
        }

        .res-pay-table {
            border-collapse: collapse;
        }

        .pay-data {
            border-bottom: 1px solid #888888;
        }

        .pay-type {
            padding: 20px 20px 20px 0px;
        }

        .refund-days {
            padding: 20px 0 20px 0px;
        }

        .res-pay-table tbody .pay-data:last-child {
            border-bottom: none;
        }

        .rest-payment-bill {
            display: flex;
        }

        .sign-img img,
        .money-img img {
            width: 100%;
            height: auto;
        }

        .signature-wrap {
            text-align: center;
            align-items: center;
            position: relative;
            left: 19%;
            padding-top: 50px;
        }

        .manager-name {
            font-weight: 500;
            font-size: 14px;
            line-height: 22px;
        }

        .thank-you-content {
            text-align: center;
            padding-top: 50px;
            font-size: 14px;
            line-height: 22px;
        }

        /************************* 7. Bus Booking CSS **************************/

        .content-min-width.bus-header {
            padding: 20px 50px 0px;
        }

        .content-min-width.bus-header .invoice-logo {
            position: relative;
            top: -9px;
        }

        .bus-invo-no-date-wrap {
            background-color: #00BAFF;
            padding: 8px 50px;
            display: flex;
            justify-content: space-between;
        }

        .bus-invo-nnum,
        .bus-invo-ddate {
            padding-left: 10px;
        }

        .invoice-timing-wrap {
            display: flex;
            justify-content: flex-start;
        }

        .invo-time-col {
            width: 50%;
            display: inline-block;
            padding: 0 12px 0 18px;
            position: relative;
        }

        .booking-info p,
        .booking-info {
            position: relative;
        }

        .booking-info .circle:before {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            border-radius: 50px;
            background-color: #00BAFF;
            left: -16px;
            top: 7px;
        }

        .booking-info:before {
            content: '';
            position: absolute;
            border-left: 2px solid #00baff;
            height: 39px;
            top: 12px;
            left: -13px;
        }

        .invoice-timing-wrap {
            padding: 26px 0 50px;
        }

        .bus-detail-col {
            display: inline-flex;
        }

        .bus-detail-col.border-bottom {
            border-bottom: 1px solid #888888;
            padding-bottom: 20px;
        }

        .bus-detail-wrap {
            display: grid;
            grid-column: 2;
            grid-template-columns: auto auto auto auto;
            gap: 20px 30px;
            grid-row: 2;
            grid-template-columns: repeat(2, 1fr);
            padding: 30px;
            border: 2px solid #12151C;
        }

        .bus-type,
        .invo-add-info-content.bus-term-cond-content,
        .invo-bill-total.bus-invo-total {
            width: 50%;
        }

        .term-con-list {
            padding: 0 0 0 16px;
            margin: 0;
        }

        .bus-conta-mail-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 0 0;
        }

        .bus-contact a,
        .bus-mail a {
            vertical-align: middle;
        }

        /************************* 8. Money Exchange CSS **************************/

        .content-min-width.money-header {
            padding: 10px 50px 10px;
        }

        .money-detail-wrap {
            margin: 50px 0;
        }

        .transfer-title {
            border-bottom: 2px solid #12151C;
            padding-bottom: 10px;
        }

        .left-money-top-row {
            padding-right: 100px;
        }

        .left-money-bottom-row {
            padding-right: 50px;
        }

        .transfer-detail-wrap {
            display: flex;
            justify-content: space-between;
        }

        .tra-money {
            color: #12151C;
        }

        .tra-title {
            padding: 10px 0 5px 0;
        }

        .tra-money {
            padding: 5px 0 10px;
        }

        .money-tran-title-wrap {
            padding: 0 0 20px 0;
        }

        .right-money-block {
            display: flex;
            align-items: center;
        }

        .money-col-one {
            padding: 0 25px 0 0;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }

        .money-col-two {
            padding: 0 25px 0;
        }

        .money-col-three {
            padding: 0 0 0 25px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }

        .money-content {
            text-transform: uppercase;
            padding-bottom: 10px;
        }

        .right-money-transfer {
            border: 2px solid #12151C;
            padding: 20px 20px 10px;
        }

        .mon-exchange-rate {
            padding-bottom: 20px;
        }

        .transfer-wrap {
            padding: 0 0 50px 0;
        }

        .mon-sent-content-wrap {
            display: flex;
            align-items: center;
            padding: 15px 0 0;
        }

        .mon-send-left-data {
            padding-right: 150px;
        }

        .mon-send-col-one,
        .mon-send-col-two {
            padding: 5px 0;
        }

        .paid-out-title-wrap {
            padding-top: 50px;
        }

        .mon-paid-left-data {
            padding-right: 120px;
        }

        /************************* 9. Money Exchange CSS **************************/

        .invo-tb-body.hosp-tb-body {
            border-bottom: none;
        }

        .hosp-invo-table {
            background-color: #F5F5F5;
        }

        .hosp-invo-table .invo-tb-header {
            background-color: #f5f5f5;
        }

        .invoice-table.hospital-table th.rate-title,
        .invoice-table.hospital-table td.rate-data {
            text-align: left
        }

        .invoice-table.hospital-table .sno-wid {
            width: 2%;
        }

        .invoice-table.hospital-table .re-price-wid {
            width: 20%;
        }

        .invoice-table.hospital-table .re-qty-wid,
        .invoice-table.hospital-table .tota-wid {
            width: 5%;
        }

        .hosp-back-img-one img {
            position: absolute;
            left: auto;
            right: 20px;
            top: 20px;
            z-index: 10;
        }

        .hospital-service-content .table-wrapper.patient-table-wrapper {
            z-index: 26;
            position: relative;
        }

        .hosp-back-img-two img {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: auto;
        }

        .table-wrapper.patient-detail-wrapper {
            padding-bottom: 0;
        }

        .hospital-table-wrap {
            margin-top: 50px;
        }

        .left-money-transfer {
            display: flex;
        }

        /************************* 10. Movie Ticket Booking CSS **************************/

        .movie-details-wrap {
            position: relative;
            display: flex;
            width: 100%;
            padding: 50px 0 0;
            column-gap: 30px;
            align-items: center;
        }

        .movie-col-left,
        .movie-col-right {
            width: 50%;
        }

        .movie-img img {
            border-radius: 10px;
            width: 100%;
            height: auto;
        }

        .movie-detail-col {
            display: inline-flex;
            align-items: center;
            padding: 10px 0;
        }

        .movie-col-right {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .movie-detail-col .movie-name {
            width: 120px;
        }

        .invo-addition-wrap.movi-add-wrap {
            justify-content: flex-end;
        }

        .invo-addition-wrap.movi-add-wrap .invo-grand-total td {
            padding: 0;
        }

        .invoice-table.movie-table .re-desc-wid {
            width: 40%;
        }

        .invoice-table.movie-table .re-price-wid {
            width: 10%;
        }

        .invoice-table.movie-table .re-qty-wid {
            width: 10%;
        }

        .invoice-table.movie-table .re-tax-wid {
            width: 10%;
        }

        .invoice-table.movie-table .tota-wid {
            width: 15%
        }

        .invoice-table.movie-table th.rate-title,
        .invoice-table.movie-table td.rate-data,
        .invoice-table.movie-payment-table th.re-desc-wid,
        .invoice-table.movie-payment-table td.rate-data.movi-pay-card,
        .invoice-table.booker-table th.rate-title,
        .invoice-table.booker-table td.rate-data {
            text-align: left;
        }

        .invoice-table.movie-table th.re-qty-wid.rate-title,
        .invoice-table.movie-table th.re-tax-wid.rate-title,
        .invoice-table.movie-table .invo-tb-data.qty-data,
        .invoice-table.movie-table .invo-tb-data.tax-data,
        .invoice-table.booker-table .tota-wid,
        .invoice-table.booker-table .invo-tb-data.total-data {
            text-align: center;
        }

        .invo-addition-wrap.movi-add-wrap .hotel-sub {
            padding-left: 50px !important;
        }

        .invoice-table.movie-payment-table .invo-tb-row td {
            padding: 0;
        }

        .invoice-table.movie-payment-table .re-desc-wid {
            width: 12%;
        }

        .invoice-table.movie-payment-tabl .re-price-wid {
            width: 12%;
        }

        .must-read-desc {
            padding-top: 10px;
        }

        .movie-must-read-wrap {
            padding-top: 30px;
        }

        /************************* 11. Stadium Seat Booking CSS **************************/

        .invoice-header.stadium-header.content-min-width {
            padding: 50px;
        }

        .invoice-header.stadium-header .invoice-logo-content {
            justify-content: center;
        }

        .invoice-header.stadium-header {
            background-image: url('../images/header/back-img-two.png');
            width: 100%;
            height: auto;
            top: 0;
            bottom: auto;
            left: 0;
            right: 0;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            position: relative;
            content: '';
        }

        .invoice-header.stadium-header:before {
            opacity: 0.6;
        }

        .invoice-logo-content {
            position: relative;
        }

        .booker-title-wrap {
            padding: 0;
        }

        .booker-table-wrap {
            padding: 0;
        }

        .invoice-table.booker-table .sno-wid {
            width: 8%;
        }

        .invoice-table.booker-table .re-price-wid {
            width: 30%;
        }

        .invoice-table.booker-table .re-qty-wid,
        .invoice-table.booker-table .tota-wid {
            width: 6%;
        }

        .invo-addition-wrap.booking-grand-total {
            padding-top: 20px;
        }

        .invo-addition-wrap.booking-grand-total .hotel-sub {
            padding-left: 35px !important;
        }

        @media print {
            .d-print-none {
                display: none !important;
            }
        }

        /************************* 12. Dark Invoice CSS **************************/
        .invoice-dark {
            background-color: #000000;
        }

        .dark-invoice-content-wrap {
            background-color: #000000;
        }

        .dark-content-section {
            background-color: #21242B;
        }

        .w-text,
        .dark-table tr th {
            color: #ffffff;
        }

        .dark-table .invoice-table {
            background-color: #21242B;
        }

        .dark-table .invo-tb-body {
            border-bottom: 2px solid #ffffff;
            border-top: 2px solid #ffffff;
        }

        .invo-bill-total.dark-invo-bill .tax-row.bottom-border,
        .dark-invo-bill .disc-row.bottom-border {
            border-bottom: 2px solid #ffffff;
        }

        .dark-bus-detail-wrap,
        .dark-money-detail-wrap,
        .dark-money-exchange,
        .dark-payment-bill-wrap .payment-wrap,
        .dark-money-details-wrap {
            border: 2px solid #ffffff;
        }

        .payment-table-wrap.dark-table,
        .dark-payment-wrap,
        .dark-invo-book-wrap .detail-col,
        .dark-money-detail-wrap {
            background: #12151C;
        }

        .hospital-table-wrap.dark-table .invo-paye-row,
        .hotel-booking-wrap.dark-table .invo-paye-row,
        .dark-payment-wrap .invo-paye-row,
        {
        border-top: 2px solid #ffffff;
        }

        .dark-title .transfer-title {
            border-bottom: 2px solid #ffffff;
        }

        .detail-col-car1.detail-col-car1-dark {
            background: #12151C;
        }

        .table-color.dark-table-color tr:nth-child(odd) {
            background: #12151C;
        }

        .photostudio-detail-wrap.photostudio-detail-wrap-dark {
            background: #12151c;
        }

        .dark-bottom-white-border {
            border-bottom: 2px solid #FFFFFF;
        }

        /************************* 13.Flight Booking CSS **************************/
        .content-min-width.flight-header {
            padding: 20px 50px;
        }

        .flight-table-wrap {
            margin-top: 0;
            padding: 20px;
        }

        .payemnt-wid-flight,
        .date-wid-flight,
        .trans-wid-flight,
        .amount-wid-flight {
            width: 33.33%;
            text-align: left;
            padding: 20px 0 10px;
        }

        table.invo-payment-table.invo-payment-table {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .invoice-timing-wrap.invoice-timing-wrap-flight {
            padding: 50px 0;
        }

        .flight-margin {
            margin: 0;
        }

        .mb {
            margin-bottom: 20px;
        }

        .flight-pt {
            padding: 0 0 10px;
            width: 25%;
        }

        .payment-desc.payment-desc {
            padding: 20px 0 0;
        }

        .thank-you-content.thank-you-content {
            padding-top: 30px;
        }

        .flight-img img {
            width: 100%;
            height: auto;
        }

        /************************* 14. Car Booking CSS **************************/
        .car-header-img {
            content: '';
            position: relative;
            background-image: url(../images/car/car-header-img.png);
            width: 100%;
            height: auto;
            top: 0;
            bottom: auto;
            left: 0;
            right: 0;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .car-mt {
            margin-top: 10px;
        }

        .detail-col-car {
            background: rgb(0 186 255 / 10%);
            width: 230px;
            padding: 20px;
        }

        .invo-car-book-wrap {
            padding: 50px 0 50px;
        }

        .detail-col-car1 {
            width: 247px;
            padding: 9px 10px;
            background: #F5F5F5;
        }

        .invo-car-book-wrap.invo-car-book-wrap {
            padding-bottom: 40px;
        }

        .hire-mt {
            padding: 50px 0 0 0;
        }

        .payment-wrap.payment-wrap-car {
            width: 360px;
            margin-top: 30px;
        }

        .bus-conta-mail-wrap.car-conta-mail-wrap {
            padding-top: 50px;
        }

        .disply-none {
            display: none;
        }

        .mt-5 {
            margin-top: 5px;
        }

        td.ptb-10 {
            padding: 10px 0;
        }

        /************************* 15.Train Booking CSS **************************/
        .train-table-wrap {
            padding: 20px;
            margin-top: 50px;
        }

        .mt {
            margin-top: 50px;
        }

        /************************* 16. Ecommerce Booking CSS **************************/
        .ecommerce-header {
            padding: 10px 50px;
        }

        /************************* 17. Student Billing  CSS **************************/
        .invoice-header.student_header .invoice-logo-content {
            justify-content: center;
        }

        .pl {
            padding-left: 20px;
        }

        .m-0 {
            margin: 0;
            margin-bottom: 10px;
        }

        .invoice-header-contact.invoice-header-contact1 {
            display: flex;
            justify-content: space-between;
        }

        /************************* 18. Domain$Hosting CSS **************************/
        .domain-header {
            padding: 10px 50px;
        }

        .domain-mt {
            padding-top: 50px;
        }

        /************************* 19. Internet Bill CSS **************************/
        .mb-digital {
            margin-bottom: 10px;
        }

        .invo-add-info-content-internet {
            width: 100%;
        }

        .mt-30 {
            margin-top: 30px;
        }

        /************************* 20. Coffee Shop CSS **************************/
        .coffee_header {
            padding: 0 0 0 50px;
        }

        .p-0-coffee {
            padding: 0;
        }

        .coffee-shop-back-img-one img {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .coffee_bg {
            background-image: url(../images/coffee-shop/coffee-back-img1.png);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
        }

        /************************* 21. Travel CSS **************************/
        .travel_header {
            content: '';
            position: relative;
            background-image: url(../images/travel/travel-header-img.png);
            width: 100%;
            height: auto;
            top: 0;
            bottom: auto;
            left: 0;
            right: 0;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            padding: 50px;
        }

        .invoice-header.travel_header:before {
            content: '';
            position: absolute;
            background-color: #12151C;
            opacity: 0.6;
            width: 100%;
            height: 100%;
            left: 0;
            right: 0;
            top: 0;
            border-radius: 20px 20px 0px 0px;
        }

        /************************* 22. Fitness CSS **************************/
        .fitness-header {
            padding: 10px 50px;
        }

        /************************* 23. Photo Studio CSS **************************/
        .invoice-header-contact-photostudio {
            display: flex;
        }

        .photostudio-detail-wrap {
            background: #F5F5F5;
            border: 2px solid #00BAFF;
        }

        .invoice-table thead th.paddind-pt {
            padding: 10px 20px;
        }

        .table-color tr:nth-child(odd) {
            background: #F5F5F5;
        }

        tr.paddind-pt-row td {
            padding: 20px;
        }

        .photostudio-header {
            padding: 10px 50px;
        }

        /************************* 24. Cleaning CSS **************************/
        .cleaning-table-wrap {
            padding: 20px;
        }

        .cleaning-back-img-one img {
            position: absolute;
            left: auto;
            right: 20px;
            top: 20px;
            z-index: 10;
        }

        .cleaning-back-img-two img {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: auto;
        }
    </style>

    <style>
        @media (max-width: 991px) {

            /*Agency Service*/
            .container {
                padding: 0 40px;
            }

            section,
            .agency-bottom-content {
                padding: 40px 0;
            }

            .logo img {
                height: 52px;
            }

            .invoice-header-contact {
                padding-top: 26px;
            }

            .invo-head-wrap.invoi-date-wrap {
                margin-top: 8px;
            }

            .content-min-width {
                padding: 40px;
            }

            .md-lg-font {
                font-size: 18px;
            }

            .invo-to-owner {
                margin: 6px 0;
            }

            .table-wrapper {
                padding: 40px 0 20px;
            }

            .invoice-table .serv-wid {
                width: 16%;
            }

            .invoice-table .desc-wid {
                width: 27%;
            }

            .invoice-table .qty-wid {
                width: 6.333333%;
            }

            .invoice-table .pric-wid {
                width: 5.33333%;
            }

            .invoice-table .tota-wid {
                width: 10%;
            }

            .invo-total-table td.invo-total-price,
            .invo-grand-total td {
                padding: 10px 0;
            }

            .invo-buttons-wrap .invo-btns .download-btn {
                padding: 12px 18px;
            }

            .invo-btns span {
                padding-left: 6px;
            }

            .invo-note-wrap {
                padding-top: 22px;
            }

            .text-invoice {
                background-size: 88%;
            }

            /*Bus Booking Content*/
            .content-min-width.bus-header {
                padding: 20px 40px 0;
            }

            .invo-time-col {
                width: auto;
            }

            .invoice-timing-wrap {
                padding: 26px 0 30px;
            }

            .invo-note-wrap {
                align-items: flex-start;
            }

            .bus-img svg {
                width: auto;
                height: 110px;
            }

            .thank-you-content {
                padding-top: 40px;
            }

            /*Hospital Content*/
            .booking-content-wrap {
                column-gap: 4px;
            }

            .item-wid {
                width: 13%;
            }

            /*Money Exchange content*/
            .money-detail-wrap {
                margin: 40px 0;
            }

            .transfer-wrap {
                padding: 0 0 40px 0;
            }

            .paid-out-title-wrap {
                padding-top: 40px;
            }

            .left-money-transfer {
                flex-wrap: wrap;
                display: flex;
            }

            .transfer-detail-wrap {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            /*Movie Booking Content*/
            .movie-detail-col {
                padding: 6px 0;
            }

            .movie-details-wrap {
                padding: 40px 0 0;
                column-gap: 20px;
            }

            .hospital-table-wrap {
                margin-top: 40px;
            }

            /* Stadium Content*/
            .table-wrapper.booker-table-wrap {
                padding: 0;
                margin: 0;
            }

            .invoice-header.stadium-header.content-min-width {
                padding: 40px;
            }

            .bus-invo-no-date-wrap {
                padding: 8px 40px;
            }

            .invo-hotel-book-wrap {
                padding-top: 40px;
            }

            /* Flight Content*/
            .content-min-width.flight-header .invoice-logo {
                /*margin: 0 auto;*/
            }

            .invo-hedaer-contact,
            .invo-hedaer-mail {
                font-size: 16px;
            }

            #student_invoice {
                padding: 20px 0;
            }

            .mt {
                margin-top: 30px;
            }

            .domain-header {
                padding: 10px 40px;
            }

            .coffee_header {
                padding: 10px 0 10px 40px;
            }

            .mt-30 {
                margin-top: 20px;
            }

            .fitness-header .invoice-header-contact {
                display: block;
            }

            .fitness-img img {
                width: auto;
                height: 120px;
            }

            .fitness-header {
                padding: 30px 40px;
            }

            .phtotstudio-img img {
                width: auto;
                height: 120px;
            }

            .photostudio-header {
                padding: 30px 40px;
            }

            .flight-img img {
                width: auto;
                height: 100px;
            }

            .invoice-timing-wrap.invoice-timing-wrap-flight {
                padding: 30px 0;
            }

            .hire-mt {
                padding: 30px 0;
            }

            .invo-car-book-wrap.invo-car-book-wrap {
                padding-bottom: 30px;
                padding-top: 30px;
            }

            .train-table-wrap {
                margin-top: 30px;
            }

            .ecommerce-img img {
                width: auto;
                height: 140px;
            }

            .pf-data {
                padding-right: 0;
            }
        }

        @media (max-width: 767px) {

            /*agency service content*/
            .invoice-table {
                white-space: pre-wrap;
            }

            .hotel-sub {
                padding-left: 16px !important;
            }

            /*Bus Booking Content*/
            .thank-you-content {
                padding-top: 30px;
            }

            .booking-info p {
                margin: 5px 0;
            }

            .booking-info:before {
                height: 30px;
            }

            .invoice-timing-wrap {
                padding: 20px 0 22px;
                justify-content: flex-start;
                flex-wrap: wrap;
            }

            .bus-detail-wrap {
                padding: 20px 20px;
                gap: 16px 26px;
            }

            .bus-detail-col.border-bottom {
                padding-bottom: 12px;
            }

            .invo-add-info-content.bus-term-cond-content {
                width: 100%;
            }

            .bus-img svg {
                width: auto;
                height: 90px;
            }

            /*Hospital Content*/
            .hosp-back-img-two img {
                width: 100%;
                height: auto;
                left: 0;
            }

            .hosp-back-img-one img {
                width: 100%;
                height: auto;
                right: 0;
            }

            /*movie ticket content*/
            .payment-table-wrap.movie-detail-table-wrap {
                overflow-x: auto;
            }

            .payment-table-wrap.movie-detail-table-wrap table {
                width: 100%;
                min-width: 550px;
            }

            .movie-detail-col .movie-name {
                width: 108px;
            }

            .movie-col-left,
            .movie-col-right {
                width: 100%;
            }

            .movie-img img {
                width: 100%;
                height: 100%;
            }

            .movie-details-wrap .movie-img {
                margin: 0 auto;
                text-align: center;
            }

            .payment-table-wrap.movie-detail-table-wrap {
                margin-top: 30px;
            }

            .movie-details-wrap {
                padding: 30px 0 0;
            }

            .table-wrapper.movie-details-table-wrapper {
                padding: 10px 0 0px;
                margin: 0 0 10px;
            }

            .invo-addition-wrap.movi-add-wrap .hotel-sub {
                padding-left: 0px !important;
            }

            .movie-detail-col {
                align-items: flex-start;
            }

            .invo-grand-total td {
                font-size: 16px;
                line-height: 22px;
            }

            .movie-col-right {
                padding: 20px 0;
            }

            /*restaurant content*/
            .rest-payment-bill table {
                width: 100%;
            }

            .signature-wrap {
                padding: 30px 0;
                left: 0;
            }

            .rest-payment-bill {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .payment-wrap {
                position: relative;
                order: 2;
            }

            .sign-img img {
                width: auto;
                height: 100%;
            }

            .rest-payment-bill .payment-wrap {
                padding: 0px 15px 0px 15px;
            }

            .rest-payment-bill .refund-days {
                padding: 10px 0 10px 0px
            }

            .rest-payment-bill .pay-type {
                padding: 10px 10px 10px 0px;
            }

            /*money content*/
            .money-img img {
                height: 100px;
            }

            .payment-wrap.payment-wrap-car {
                width: 100%;
            }

            .bus-conta-mail-wrap.car-conta-mail-wrap {
                padding-top: 30px;
            }

            .hire-mt {
                padding: 30px 0;
            }

            .payment-wrap.payment-wrap-car {
                margin-top: 0;
            }

            .train-table-wrap {
                margin-top: 30px;
            }

            .mt {
                margin-top: 30px;
            }

            .domain-img img {
                width: auto;
                height: 120px;
            }

            .coffee-shop-img img {
                width: auto;
                height: 120px;
            }

            .cleaning-back-img-one img {
                width: 100%;
                height: auto;
                right: 0;
            }

            .cleaning-back-img-two img {
                width: 100%;
                height: auto;
                left: 0;
            }
        }

        @media (max-width: 580px) {
            .movie-details-wrap {
                flex-wrap: wrap;
            }

            .pf-data {
                padding-right: 0;
            }

            .student_header {
                padding: 30px;
            }

            .mt-30 {
                margin-top: 10px;
            }

            .coffee-shop-back-img-one img {
                width: 500px;
            }

            .bus-type {
                width: auto;
            }

            .bus-detail-col {
                display: block;
            }

            .invoice-header-contact-photostudio {
                display: block;
            }

            .phtotstudio-img img {
                width: auto;
                height: 100px;
            }

            .ecommerce-header .invoice-header-contact {
                display: block;
            }

            .detail-col-car1 {
                width: 100%
            }
        }

        @media (max-width: 575px) {
            .invoice-table {
                width: 100%;
                caption-side: bottom;
                border-collapse: collapse;
                min-width: 500px;
            }

            .table-wrapper.agency-service-table,
            .table-wrapper {
                overflow-x: auto;
            }

            .logo img {
                height: 35px;
            }

            .invoice-logo-content {
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
            }

            .invo-head-wrap.invoi-date-wrap {
                margin-top: 2px;
            }

            .invo-head-content {
                padding-top: 20px;
                width: 100%
            }

            .invoice-header-contact {
                flex-direction: column
            }

            .invoice-header-contact,
            .paid-out-title-wrap,
            .movie-col-right {
                padding-top: 20px;
            }

            .invo-cont-wrap.invo-contact-wrap {
                margin: 0 0 10px 0;
            }

            .content-min-width {
                padding: 30px 20px;
            }

            section,
            .agency-bottom-content {
                padding: 30px 0;
            }

            .container {
                padding: 0 20px;
            }

            .invoice-owner-conte-wrap {
                display: flex;
                flex-direction: column;
                width: 100%;
                align-items: flex-start;
                justify-content: space-between;
            }

            .invo-to-wrap,
            .invo-pay-to-wrap {
                width: 100%;
                text-align: left;
            }

            .invo-owner-address {
                line-height: 22px;
            }

            .invo-to-owner {
                margin: 2px 0;
                font-size: 16px;
            }

            .invo-pay-to-wrap {
                padding-top: 14px;
            }

            .table-wrapper {
                padding: 20px 0 0px;
                margin: 0 0 10px;
            }

            .invoice-table td {
                padding: 12px 0;
            }

            .invo-addition-wrap {
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
            }

            .invo-add-info-content,
            .invo-bill-total,
            .movie-col-left,
            .movie-col-right,
            .rest-payment-bill table {
                width: 100%;
            }

            .invo-add-info-content {
                position: relative;
                order: 2;
                padding-top: 10px;
            }

            .invo-bill-total {
                position: relative;
                order: 1;
            }

            .hotel-sub {
                padding-left: 0px !important;
            }

            .invo-bill-total table {
                width: 100%;
            }

            .invo-total-table .tax-row td {
                padding: 8px 0;
            }

            .addi-info-title {
                margin: 0 0 4px;
            }

            .invo-note-wrap {
                display: flex;
                align-items: flex-start;
            }

            .note-desc {
                font-size: 14px;
                line-height: 20px;
            }

            .booking-info {
                margin: 5px 0;
            }

            /*bus booking content*/
            .content-min-width.bus-header .invoice-logo-content {
                justify-content: space-between;
                align-items: center;
                flex-direction: row;
            }

            .content-min-width.bus-header .invoice-logo {
                top: 0px;
            }

            .bus-detail-wrap .bus-type,
            .bus-detail-wrap .bus-tname {
                width: 100%;
                font-size: 14px;
                line-height: 20px;
            }

            .invoice-table.bus-detail-table .sno-wid {
                width: 14%;
            }

            .invoice-table.bus-detail-table .re-price-wid {
                width: 6%;
            }

            .invoice-table.bus-detail-table .re-qty-wid {
                width: 4%;
            }

            .invoice-table.bus-detail-table .tota-wid {
                width: 3%;
            }

            .bus-invo-no-date-wrap {
                padding: 12px 20px;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .bus-invo-num,
            .bus-invo-date {
                width: 100%;
            }

            .invoice-timing-wrap {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .booking-info:before {
                height: 29px;
            }

            .bus-detail-wrap {
                grid-template-columns: repeat(2, 1fr);
            }

            .bus-detail-col {
                border-bottom: 1px solid #888888;
            }

            .money-detail-wrap {
                margin: 30px 0;
            }

            .bus-detail-col.seat-col {
                border-bottom: 1px solid #888888;
                padding-bottom: 12px;
            }

            .bus-conta-mail-wrap {
                flex-wrap: wrap;
                padding: 20px;
            }

            .bus-invo-date {
                padding-top: 6px;
            }

            .bus-contact a,
            .bus-mail a {
                font-size: 16px;
            }

            .content-min-width.bus-header {
                padding: 30px 20px;
            }

            .bus-img {
                display: none;
            }

            .content-min-width.bus-header .invoice-logo {
                top: 0;
                margin: 0 auto;
            }

            /*Hospital Content*/
            .payment-table-wrap {
                padding: 10px 10px;
            }

            .payemnt-wid,
            .date-wid,
            .trans-wid,
            .amount-wid {
                font-size: 14px;
                text-align: center;
                padding: 10px 1px;
            }

            .invo-paye-row .payment-desc {
                text-align: center;
            }

            .payment-desc {
                padding: 10px 4px 10px;
            }

            .hospital-table-wrap {
                margin-top: 30px;
            }

            .payment-table-wrap {
                overflow-x: auto;
            }

            .invo-payment-table {
                width: 100%;
                caption-side: bottom;
                border-collapse: collapse;
                min-width: 300px;
            }

            .payment-table-wrap.hotel-booking-wrap .invo-payment-table {
                min-width: 430px;
            }

            .invoice-table.hospital-table .sno-wid {
                width: 4%;
            }

            .invo-book-detail {
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
            }

            .invo-hotel-book-wrap {
                padding-top: 30px;
            }

            /*money exchange*/
            .content-min-width.money-header {
                padding: 24px 20px 24px;
            }

            .transfer-detail-wrap {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .left-money-transfer {
                display: flex;
                justify-content: flex-start;
                width: 100%;
                flex-wrap: wrap;
            }

            .left-money-top-row {
                padding-right: 0px;
                width: 100%;
            }

            .left-money-bottom-row,
            .mon-send-left-data,
            .mon-paid-left-data,
            .mon-send-right-data {
                padding-right: 0;
                width: 100%;
            }

            .content-min-width.money-header .invoice-logo-content {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }

            .money-img img {
                height: 70px;
            }

            .mon-exchange-rate {
                padding-bottom: 10px;
            }

            .right-money-transfer {
                margin-top: 20px;
            }

            .transfer-wrap {
                padding: 0 0 30px 0;
            }

            .mon-sent-content-wrap {
                flex-wrap: wrap;
            }

            /*movie ticket content*/
            .movie-details-wrap {
                flex-wrap: wrap;
            }

            .movie-img img {
                width: 100%;
                height: 100%;
            }

            .movie-details-wrap .movie-img {
                margin: 0 auto;
                text-align: center;
            }

            .payment-table-wrap.movie-detail-table-wrap {
                margin-top: 30px;
            }

            .movie-details-wrap {
                padding: 30px 0 0;
            }

            .table-wrapper.movie-details-table-wrapper {
                padding: 10px 0 0px;
            }

            .invo-addition-wrap.movi-add-wrap .hotel-sub {
                padding-left: 0px !important;
            }

            .movie-detail-col {
                align-items: flex-start;
            }

            .invo-grand-total td {
                font-size: 16px;
                line-height: 22px;
            }

            /*Stadium Content*/
            .invoice-table.booker-table .re-qty-wid,
            .invoice-table.booker-table .tota-wid {
                width: 3%;
            }

            .invoice-table.booker-table .re-price-wid {
                width: 10%;
            }

            .invoice-table.booker-table .sno-wid {
                width: 6%;
            }

            .invoice-table.movie-table .re-desc-wid {
                width: 22%;
            }

            .invoice-header.stadium-header .invoice-logo {
                margin: 0 auto;
                text-align: center;
            }

            .invoice-header.stadium-header.content-min-width {
                padding: 34px 20px;
            }

            .invo-bill-total.bus-invo-total {
                width: 100%;
            }

            .flight-img img {
                display: none;
            }

            .ecommerce-img img {
                width: auto;
                height: 100px;
            }

            .ecommerce-img {
                text-align: right;
            }

            .phtotstudio-img {
                text-align: right;
            }

            .photostudio-header .invoice-logo-content {
                flex-direction: row;
            }

            .invoice-logo-content.hide {
                flex-direction: row;
                align-items: center;
            }

            a.contact_focus,
            a.email_focus {
                font-size: 16px;
            }

            .invoice-timing-wrap.invoice-timing-wrap-flight {
                padding: 20px 0;
            }

            .invo-car-book-wrap.invo-car-book-wrap {
                padding-bottom: 30px;
                padding-top: 30px;
            }

            .ecommerce-header {
                padding: 20px 20px;
            }

            #student_invoice {
                padding: 0;
            }

            .pf-data {
                padding-bottom: 30px;
            }

            .student_header .invoice-logo-content {
                flex-direction: row;
            }

            .student_header .invoice-header-contact.invoice-header-contact1 {
                flex-direction: row;
            }

            .domain-header {
                padding: 10px 20px;
            }

            .domain-header .invoice-logo-content {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            .mt-30 {
                margin-top: 10px;
            }

            .pf-data {
                padding-bottom: 10px;
            }

            .coffee_header .invoice-logo-content {
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            .coffee-shop-img {
                text-align: right;
            }

            .coffee_header {
                padding: 0 0 0 20px;
            }

            .mt {
                margin-top: 20px;
            }

            .fitness-img {
                text-align: right;
            }

            .fitness-header {
                padding: 20px;
            }

            .photostudio-detail-wrap {
                margin-top: 30px;
            }

            .invoice-table thead th.paddind-pt {
                padding: 10px 17px;
            }

            .travel_header .invoice-logo {
                margin: 0 auto;
            }

            .content-min-width.flight-header .invoice-logo {
                margin: 0 auto;
            }

            .thank-you-content.thank-you-content {
                /*padding-top: 0;*/
            }

            .coffee-shop-back-img-one img {
                display: none;
            }

            .p-0-coffee.mt {
                margin-top: 0;
            }

            .coffee_header .invo-head-content {
                padding-top: 0;
            }
        }

        @media (max-width: 475px) {
            .bus-img svg {
                height: 80px;
                margin-left: 18px;
            }

            .invoice-timing-wrap.invoice-timing-wrap-flight {
                padding: 20px 0;
            }

            .fs {
                font-size: 14px;
            }

            .invo-payment-table.invo-payment-table {
                min-width: 480px;
            }

            .coffee-shop-back-img-one img {
                width: 400px;
            }

            .fitness-img img {
                width: auto;
                height: 100px;
            }
        }

        @media (max-width: 390px) {
            .invo-note-wrap {
                flex-wrap: wrap;
            }

            .note-desc {
                padding: 6px 0 0 2px;
            }

            .booking-info.column-one:before {
                height: 44px;
            }

            .movie-detail-col .movie-name,
            .movie-detail-col .movie-tname {
                font-size: 14px;
                line-height: 20px;
            }

            .fs {
                line-height: 20px;
            }

            .detail-col-car {
                padding: 10px;
            }

            .student_header .invoice-header-contact.invoice-header-contact1 {
                flex-direction: column;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .coffee-shop-img img {
                width: auto;
                height: 90px;
            }

            .coffee-shop-back-img-one img {
                width: 300px;
            }

            .domain-img img {
                width: auto;
                height: 80px;
            }

            .ecommerce-img img {
                display: none;
            }

            .phtotstudio-img img {
                display: none;
            }

            .fitness-img img {
                display: none;
            }
        }

        @media (max-width: 340px) {
            .movie-name.show-name {
                width: 100px;
            }

            .rest-payment-bill td {
                font-size: 14px;
                line-height: 20px;
            }

            .bus-detail-col {
                border: none;
            }

            .bus-detail-wrap {
                grid-template-columns: repeat(1, 1fr);
            }

            .fitness-img img {
                display: none;
            }

            .phtotstudio-img img {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="invoice_wrap">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section" style="border: 1px solid #999;">
                <!--Header Start Here -->
                <header class="invoice-header car-header-img content-min-width" id="invo_header"
                    style="background: #FFF;">
                    <div class="invoice-logo-content">
                        <div class="invoice-logo">
                            <a href="car_booking.html" class="logo"><img
                                    src="{{ asset('assets/wp-content/uploads/2022/12/site_logo_black_3.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </header>
                <!--Header End Here -->

                <!--Invoice content start -->
                <section class="agency-service-content car-invoice-content" id="car_booking">
                    <div class="container">
                        <!--invoice owner name content Start Here-->
                        <div class="invoice-owner-conte-wrap">
                            <div class="invo-to-wrap">
                                <div class="invoice-to-content">
                                    <p class="invo-to inter-700 medium-font mtb-0">Amount:</p>
                                    <p class="invo-owner-address medium-font inter-400 mtb-0 car-mt" style="font-size: 28px; color: #000;">
                                        <b>${{ $data['amount'] / 100 }}</b></p>
                                </div>
                            </div>
                        </div>
                        <!--invoice owner name content End Here  -->



                        <!--Hire Details Start -->
                        <div class="money-send-title-wrap hire-mt">
                            <h3 class="mtb-0 transfer-title inter-700 md-lg-font" style="color: #04359d">Account
                                Information</h3>
                            <div class="mon-sent-content-wrap">
                                <div class="mon-send-left-data">
                                    <div class="mon-send-col-one">
                                        <span class="mon-send-title sm-md-text b-text inter-500" style="font-weight: bold;">Total Debit:</span>
                                        <span
                                            class="mon-send-desc sm-md-text second-color inter-400">${{ $total_debit / 100 }}</span>
                                    </div>
                                    <div class="mon-send-col-one">
                                        <span class="mon-send-title sm-md-text b-text inter-500" style="font-weight: bold;">Total Credit:</span>
                                        <span
                                            class="mon-send-desc sm-md-text second-color inter-400">${{ $total_credit / 100 }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Hire Details End -->

                        <!-- Car Payment detail table start here -->
                        <div class="rest-payment-bill">
                            <div class="payment-wrap payment-wrap-car" style="width: 100%">
                                <table class="res-pay-table" style="width: 100%">
                                    <tbody>
                                        <tr class="pay-data">
                                            <td class="pay-type inter-700 medium-font b-text">Date/Time:</td>
                                            <td class="refund-days inter-400 second-color" style="font-size: 14px;">
                                                {{ date('F j, Y, s:i', strtotime(substr($data['created_at'], 0, 10))) }}
                                            </td>
                                        </tr>
                                        @if (isset($data['confirmation_status']))
                                            <tr class="pay-data">
                                                <td class="pay-type inter-700 medium-font b-text">Payment Method:</td>
                                                <td class="refund-days inter-400 second-color" style="font-size: 14px;">
                                                    {{ ucfirst($data['payment_method']) }}</td>
                                            </tr>
                                        @endif
                                        @if (isset($data['status']))
                                            <tr class="pay-data">
                                                <td class="pay-type inter-700 medium-font b-text">To:</td>
                                                <td class="refund-days inter-400 second-color" style="font-size: 14px;">
                                                    {{ ucfirst($data['receipient_name']) }}</td>
                                            </tr>
                                            <tr class="pay-data">
                                                <td class="pay-type inter-700 medium-font b-text">Account:</td>
                                                <td class="refund-days inter-400 second-color" style="font-size: 14px;">
                                                    {{ ucfirst($data['account_number']) }}</td>
                                            </tr>
                                            <tr class="pay-data">
                                                <td class="pay-type inter-700 medium-font b-text">Destination Bank:</td>
                                                <td class="refund-days inter-400 second-color" style="font-size: 14px;">
                                                    {{ ucfirst($data['receipient_bank']) }}</td>
                                            </tr>
                                        @endif
                                        @if (isset($data['swift_code']))
                                            <tr class="pay-data">
                                                <td class="pay-type inter-700 medium-font b-text">SWIFT Code:</td>
                                                <td class="refund-days inter-400 second-color" style="font-size: 14px;">
                                                    {{ ucfirst($data['swift_code']) }}</td>
                                            </tr>
                                        @endif
                                        <tr class="pay-data">
                                            <td class="pay-type inter-700 medium-font b-text">Reference:</td>
                                            <td class="refund-days inter-400 second-color" style="font-size: 12px; font-weight: bold;">
                                                {{ ucfirst($data['hash']) }}</td>
                                        </tr>
                                        <tr class="pay-data">
                                            <td class="pay-type inter-700 medium-font b-text">Description:</td>
                                            <td class="refund-days inter-400 second-color" style="font-size: 14px;">
                                                {{ ucfirst($data['description']) }}</td>
                                        </tr>

                                        {{-- <tr class="pay-data">
                                            <td class="pay-type inter-700 medium-font b-text">Depature Date:</td>
                                            <td class="refund-days inter-400 second-color">{{ date("F j, Y", strtotime(substr($order->depature_date, 0, 10))) }}</td>
                                        </tr>
                                        <tr class="pay-data">
                                            <td class="pay-type inter-700 medium-font b-text">Delivery Date:</td>
                                            <td class="refund-days inter-400 second-color">{{ date("F j, Y", strtotime(substr($order->delivery_date, 0, 10))) }}</td>
                                        </tr>
                                        <tr class="pay-data">
                                            <td class="pay-type inter-700 medium-font b-text">Pickup Date:</td>
                                            <td class="refund-days inter-400 second-color">{{ date("F j, Y", strtotime(substr($order->pickup_date, 0, 10))) }}</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- CarPayment detail table end here -->

                    </div>
                </section>
                <!--Invoice content end here -->
            </div>

            <!--bottom content start here -->
            <section class="agency-bottom-content d-print-none" id="agency_bottom">
                <div class="container">
                    <!--print-download content start here -->
                    <div class="invo-buttons-wrap">
                        {{-- <div class="invo-print-btn invo-btns">
                            <a href="javascript:window.print()" class="print-btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_5_313)">
                                        <path
                                            d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9 7H10" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9 13H15" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M13 17H15" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5_313">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="inter-700 medium-font">Print</span>
                            </a>
                        </div> --}}
                        <div class="invo-down-btn invo-btns">
                            <a class="download-btn" id="generatePDF">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_5_246)">
                                        <path
                                            d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M7 11L12 16L17 11" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5_246">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span class="inter-700 medium-font">Download</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--bottom content end here -->
        </div>
    </div>
    <!--Invoice Wrap End here -->
    <script src="{{ asset('assets/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/jspdf.min.js') }}"></script>
    <script src="{{ asset('assets/html2canvas.min.js') }}"></script>
    <script src="{{ asset('assets/custom.js') }}"></script>
</body>
</body>

</html>
