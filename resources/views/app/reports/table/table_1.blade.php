<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
  
  <style>  
 
     * {
      margin: 0px; 
      padding: 0px; 
      box-sizing: border-box;
    }

    body, html {
      height: 100%; 
      direction: rtl
    }
 

    .limiter {
      width: 100%;
      margin: 0 auto;
      text-align: center; 
    }

    .container-table100 {
      width: 100%;
      min-height: 100vh;
      background: #d1d1d1;

      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      padding: 33px 30px;
    }

    .wrap-table100 {
      width: 1300px;
    }

    /*//////////////////////////////////////////////////////////////////
    [ Table ]*/
    table {
      width: 100%;
      background-color: #fff;
    }

    th, td {
      font-weight: unset;
      padding-right: 10px;
    }

    .column100 {
      width: 130px;
      padding-left: 25px;
    }

    .column100.column1 {
      width: 265px;
      padding-left: 42px;
    }

    .row100.head th {
      padding-top: 24px;
      padding-bottom: 20px;
    }

    .row100 td {
      padding-top: 18px;
      padding-bottom: 14px;
    }


    /*==================================================================
    [ Ver1 ]*/
    .table100.ver1 td {
      font-family: Montserrat-Regular;
      font-size: 14px;
      color: #808080;
      line-height: 1.4;
    }

    .table100.ver1 th {
      font-family: Montserrat-Medium;
      font-size: 12px;
      color: #fff;
      line-height: 1.4;
      text-transform: uppercase;

      background-color: #36304a;
    }

    .table100.ver1 .row100:hover {
      background-color: #f2f2f2;
    }

    .table100.ver1 .hov-column-ver1 {
      background-color: #f2f2f2;
    }

    .table100.ver1 .hov-column-head-ver1 {
      background-color: #484848 !important;
    }

    .table100.ver1 .row100 td:hover {
      background-color: #6c7ae0;
      color: #fff;
    }

    /*==================================================================
    [ Ver2 ]*/
    .table100.ver2 td {
      font-family: Montserrat-Regular;
      font-size: 14px;
      color: #808080;
      line-height: 1.4;
    }

    .table100.ver2 th {
      font-family: Montserrat-Medium;
      font-size: 12px;
      color: #fff;
      line-height: 1.4;
      text-transform: uppercase;

      background-color: #333333;
    }

    .table100.ver2 .row100:hover td {
      background-color: #83d160;
      color: #fff;
    }

    .table100.ver2 .hov-column-ver2 {
      background-color: #83d160;
      color: #fff;
    }

    .table100.ver2 .hov-column-head-ver2 {
      background-color: #484848 !important;
    }

    .table100.ver2 .row100 td:hover {
      background-color: #57b846;
      color: #fff;
    }

    /*==================================================================
    [ Ver2 ]*/
    .table100.ver2 tbody tr:nth-child(even) {
      background-color: #eaf8e6;
    }

    .table100.ver2 td {
      font-family: Montserrat-Regular;
      font-size: 14px;
      color: #808080;
      line-height: 1.4;
    }

    .table100.ver2 th {
      font-family: Montserrat-Medium;
      font-size: 12px;
      color: #fff;
      line-height: 1.4;
      text-transform: uppercase;

      background-color: #333333;
    }

    .table100.ver2 .row100:hover td {
      background-color: #83d160;
      color: #fff;
    }

    .table100.ver2 .hov-column-ver2 {
      background-color: #83d160;
      color: #fff;
    }

    .table100.ver2 .hov-column-head-ver2 {
      background-color: #484848 !important;
    }

    .table100.ver2 .row100 td:hover {
      background-color: #57b846;
      color: #fff;
    }

    /*==================================================================
    [ Ver3 ]*/
    .table100.ver3 tbody tr {
      border-bottom: 1px solid #e5e5e5;
    }

    .table100.ver3 td {
      font-family: Montserrat-Regular;
      font-size: 14px;
      color: #808080;
      line-height: 1.4;
    }

    .table100.ver3 th {
      font-family: Montserrat-Medium;
      font-size: 12px;
      color: #fff;
      line-height: 1.4;
      text-transform: uppercase;

      background-color: #6c7ae0;
    }

    .table100.ver3 .row100:hover td {
      background-color: #fcebf5;
    }

    .table100.ver3 .hov-column-ver3 {
      background-color: #fcebf5;
    }

    .table100.ver3 .hov-column-head-ver3 {
      background-color: #7b88e3 !important;
    }

    .table100.ver3 .row100 td:hover {
      background-color: #e03e9c;
      color: #fff;
    }

    /*==================================================================
    [ Ver4 ]*/

    .table100.ver4 td {
      font-family: Montserrat-Regular;
      font-size: 14px;
      color: #808080;
      line-height: 1.4;
    }

    .table100.ver4 th {
      font-family: Montserrat-Medium;
      font-size: 12px;
      color: #fff;
      line-height: 1.4;
      text-transform: uppercase;

      background-color: #fa4251;
    }

    .table100.ver4 .row100:hover td {
      color: #fa4251;
    }

    .table100.ver4 .hov-column-ver4 {
      background-color: #ffebed;
    }

    .table100.ver4 .hov-column-head-ver4 {
      background-color: #f95462 !important;
    }

    .table100.ver4 .row100 td:hover {
      background-color: #ffebed;
      color: #fa4251;
    }

    /*==================================================================
    [ Ver5 ]*/
    .table100.ver5 tbody tr:nth-child(even) {
      background-color: #e9faff;
    }

    .table100.ver5 td {
      font-family: Montserrat-Regular;
      font-size: 14px;
      color: #808080;
      line-height: 1.4;
      position: relative;
    }

    .table100.ver5 th {
      font-family: Montserrat-Medium;
      font-size: 12px;
      color: #fff;
      line-height: 1.4;
      text-transform: uppercase;

      background-color: #002933;
    }

    .table100.ver5 .row100:hover td {
      color: #fe3e64;
    }

    .table100.ver5 .hov-column-ver5 {color: #fe3e64;}
    .table100.ver5 .hov-column-ver5::before {
      content: "";
      display: block;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      pointer-events: none;
      border-left: 1px solid #f2f2f2;
      border-right: 1px solid #f2f2f2;
    }

    .table100.ver5 .hov-column-head-ver5 {
      background-color: #1a3f48 !important;
      color: #fe3e64;
    }

    .table100.ver5 .row100 td:hover {
      color: #fe3e64;
    }

    .table100.ver5 .row100 td:hover:before {
      content: "";
      display: block;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      pointer-events: none;
      border: 1px solid #fe3e64;
    }

    /*==================================================================
    [ Ver6 ]*/

    .table100.ver6 {
      border-radius: 16px;
      overflow: hidden;
      background: #7918f2;
      background: -webkit-linear-gradient(-68deg, #ac32e4 , #4801ff);
      background: -o-linear-gradient(-68deg, #ac32e4 , #4801ff);
      background: -moz-linear-gradient(-68deg, #ac32e4 , #4801ff);
      background: linear-gradient(-68deg, #ac32e4 , #4801ff);
    }

    .table100.ver6 table {
      background-color: transparent;
    }

    .table100.ver6 td {
      font-family: Montserrat-Regular;
      font-size: 14px;
      color: #fff;
      line-height: 1.4;
    }

    .table100.ver6 th {
      font-family: Montserrat-Medium;
      font-size: 12px;
      color: #fff;
      line-height: 1.4;
      text-transform: uppercase;

      background-color: rgba(255,255,255,0.32);
    }

    .table100.ver6 .row100:hover td {
      background-color: rgba(255,255,255,0.1);
    }

    .table100.ver6 .hov-column-ver6 {
      background-color: rgba(255,255,255,0.1);
    }


    .table100.ver6 .row100 td:hover {
      background-color: rgba(255,255,255,0.2);
    }









    @page {
      header: page-header;
      footer: page-footer;
    }


    
    
    /*==================================================================
    [ header  footer ]*/ 
    .invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				/* border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); */
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: center;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: center;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: center;
        }
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}
 
      .img{
          display: block;
          margin: 0 auto;  
          border: 1px solid #ddd;
          border-radius: 4px !important;
          padding: 15px;  130px;
          width:  130px  !important;
        }
			.invoice-box.rtl table {
				text-align: center !important;
			}
  
  </style>
</head>
<body> 

  <htmlpageheader name="page-header">  
	
    <div class="invoice-box">
      <table>
        <tr class="header-table"> 
          <td class="hele">
            <img class="img" src="https://drive.google.com/file/d/1hl6pRtESa1nE5EsqZi2bMXSbK5Jh52nx/view?usp=sharing" />
            <p>صورة </p>
          </td>

          <td  > 
            <img class="img" src="https://drive.google.com/file/d/1hl6pRtESa1nE5EsqZi2bMXSbK5Jh52nx/view?usp=sharing"  />
            <p>صورة </p>
          </td>

          <td > 
            <img class="img" src="https://cdn.mosoah.com/wp-content/uploads/2019/11/05171421/%D8%B5%D9%88%D8%B1-%D8%B4%D8%B9%D8%A7%D8%B1-%D8%B1%D8%A4%D9%8A%D8%A9-%D9%88%D8%B7%D9%86-%D8%AC%D8%AF%D9%8A%D8%AF%D8%A95-746x510.jpg"  />
            <p>صورة </p>
          </td>
        </tr>
      </table>
    </div>
  </htmlpageheader>

<htmlpagefooter name="page-footer">
 
</htmlpagefooter> 

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
  

				<div class="table100 ver5 m-b-110">
					<table data-vertable="ver5">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">رقم الصنف</th>
								<th class="column100 column2" data-column="column2">وصف الصنف </th>
								<th class="column100 column3" data-column="column3">نوع العهدة</th>
								<th class="column100 column4" data-column="column4">الحالة</th>
								<th class="column100 column5" data-column="column5">الكمية</th>
								<th class="column100 column6" data-column="column6">تاريخ الاستلام</th> 
							</tr>
						</thead>
						<tbody>  
 
              @foreach ($custodies as $custody)
              <tr  class="row100">

                <td class="column100 column1" data-column="column1"> {{$custody->id}} </td>
                <td class="column100 column2" data-column="column2"> {{$custody->item_des}} </td>
                <td class="column100 column3" data-column="column3"> {{$custody->type->name}} </td>
                <td class="column100 column4" data-column="column4"> {{$custody->item_status}} </td>
                <td class="column100 column5" data-column="column5"><span> {{$custody->quantity}} </span></td>
                <td class="column100 column6" data-column="column6"><span> {{$custody->insert_date}} </span></td>
          
              </tr> 
            @endforeach
		 
						</tbody>
					</table>
				</div>
 
 

			</div>
		</div>
	</div>

 

</body>
</html>