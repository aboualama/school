@extends('layouts/fullLayoutMaster')

@section('title', 'Invoice Print')

@section('page-style')
<link rel="stylesheet" href="{{asset(mix('css/base/pages/app-invoice-print.css'))}}">
@endsection

@section('content')

<style>
  .img{
    max-width: 100px;
    display: block;
    margin: 0 auto;
  }



  @media print {

    .header {
    position: fixed;  
    width: 90%; 
    top: 0;  
  }

  .footer {
    position: fixed;  
    width: 90%; 
    bottom: 0;  
  }

}
</style>


  {{-- header --}}
  <div class="d-flex justify-content-between flex-md-row flex-column pb-2 header">
    <div>
      <div class="d-flex mb-1"> 
        <img class="img" src="https://cdn.mosoah.com/wp-content/uploads/2019/11/05171421/%D8%B5%D9%88%D8%B1-%D8%B4%D8%B9%D8%A7%D8%B1-%D8%B1%D8%A4%D9%8A%D8%A9-%D9%88%D8%B7%D9%86-%D8%AC%D8%AF%D9%8A%D8%AF%D8%A95-746x510.jpg"  />

      </div>
      <p class="mb-25">Office 149, 450 South Brand Brooklyn</p>
      <p class="mb-25">San Diego County, CA 91905, USA</p>
      <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
    </div>
    
    <div> 
      <div class="d-flex mb-1">   
          <img  class="img" src="http://127.0.0.1:8000/uploads/image/setting/logo.png" >  
      </div>
      <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
    </div>

    <div class="mt-md-0 mt-2">
      <h4 class="font-weight-bold text-right mb-1">INVOICE #3492</h4>
      <div class="invoice-date-wrapper mb-50">
        <span class="invoice-date-title">Date Issued:</span>
        <span class="font-weight-bold"> 25/08/2020</span>
      </div>
      <div class="invoice-date-wrapper">
        <span class="invoice-date-title">Due Date:</span>
        <span class="font-weight-bold">29/08/2020</span>
      </div>
    </div>
  </div>



  <div class="invoice-print p-3">


    <hr class="my-2" />
  
    <div class="row pb-2">
      <div class="col-sm-6">
        <h6 class="mb-1">Invoice To:</h6>
        <p class="mb-25">Thomas shelby</p>
        <p class="mb-25">Shelby Company Limited</p>
        <p class="mb-25">Small Heath, B10 0HF, UK</p>
        <p class="mb-25">718-986-6062</p>
        <p class="mb-0">peakyFBlinders@gmail.com</p>
      </div>
      <div class="col-sm-6 mt-sm-0 mt-2">
        <h6 class="mb-1">Payment Details:</h6>
        <table>
          <tbody>
            <tr>
              <td class="pr-1">Total Due:</td>
              <td><strong>$12,110.55</strong></td>
            </tr>
            <tr>
              <td class="pr-1">Bank name:</td>
              <td>American Bank</td>
            </tr>
            <tr>
              <td class="pr-1">Country:</td>
              <td>United States</td>
            </tr>
            <tr>
              <td class="pr-1">IBAN:</td>
              <td>ETD95476213874685</td>
            </tr>
            <tr>
              <td class="pr-1">SWIFT code:</td>
              <td>BR91905</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
    <div class="table-responsive mt-2">
      <table class="table m-0">
        <thead>
          <tr>
            <th class="py-1 pl-4">Task description</th>
            <th class="py-1">Rate</th>
            <th class="py-1">Hours</th>
            <th class="py-1">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Native App Development</p>
              <p class="text-muted text-nowrap">
                Developed a full stack native app using React Native, Bootstrap & Python
              </p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>30</strong>
            </td>
            <td class="py-1">
              <strong>$1,800.00</strong>
            </td>
          </tr>
          <tr class="border-bottom">
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Ui Kit Design</p>
              <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>20</strong>
            </td>
            <td class="py-1">
              <strong>$1200.00</strong>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  
    <div class="row invoice-sales-total-wrapper mt-3">
      <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
        <p class="card-text mb-0">
          <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
        </p>
      </div>
      <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
        <div class="invoice-total-wrapper">
          <div class="invoice-total-item">
            <p class="invoice-total-title">Subtotal:</p>
            <p class="invoice-total-amount">$1800</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Discount:</p>
            <p class="invoice-total-amount">$28</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Tax:</p>
            <p class="invoice-total-amount">21%</p>
          </div>
          <hr class="my-50" />
          <div class="invoice-total-item">
            <p class="invoice-total-title">Total:</p>
            <p class="invoice-total-amount">$1690</p>
          </div>
        </div>
      </div>
    </div>
  
    <hr class="my-2" />
  
    <div class="row">
      <div class="col-12">
        <span class="font-weight-bold">Note:</span>
        <span
          >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
          projects. Thank You!</span
        >
      </div>
    </div> 
  
  </div>


  <div class="invoice-print p-3">


    <hr class="my-2" />
  
    <div class="row pb-2">
      <div class="col-sm-6">
        <h6 class="mb-1">Invoice To:</h6>
        <p class="mb-25">Thomas shelby</p>
        <p class="mb-25">Shelby Company Limited</p>
        <p class="mb-25">Small Heath, B10 0HF, UK</p>
        <p class="mb-25">718-986-6062</p>
        <p class="mb-0">peakyFBlinders@gmail.com</p>
      </div>
      <div class="col-sm-6 mt-sm-0 mt-2">
        <h6 class="mb-1">Payment Details:</h6>
        <table>
          <tbody>
            <tr>
              <td class="pr-1">Total Due:</td>
              <td><strong>$12,110.55</strong></td>
            </tr>
            <tr>
              <td class="pr-1">Bank name:</td>
              <td>American Bank</td>
            </tr>
            <tr>
              <td class="pr-1">Country:</td>
              <td>United States</td>
            </tr>
            <tr>
              <td class="pr-1">IBAN:</td>
              <td>ETD95476213874685</td>
            </tr>
            <tr>
              <td class="pr-1">SWIFT code:</td>
              <td>BR91905</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
    <div class="table-responsive mt-2">
      <table class="table m-0">
        <thead>
          <tr>
            <th class="py-1 pl-4">Task description</th>
            <th class="py-1">Rate</th>
            <th class="py-1">Hours</th>
            <th class="py-1">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Native App Development</p>
              <p class="text-muted text-nowrap">
                Developed a full stack native app using React Native, Bootstrap & Python
              </p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>30</strong>
            </td>
            <td class="py-1">
              <strong>$1,800.00</strong>
            </td>
          </tr>
          <tr class="border-bottom">
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Ui Kit Design</p>
              <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>20</strong>
            </td>
            <td class="py-1">
              <strong>$1200.00</strong>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  
    <div class="row invoice-sales-total-wrapper mt-3">
      <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
        <p class="card-text mb-0">
          <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
        </p>
      </div>
      <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
        <div class="invoice-total-wrapper">
          <div class="invoice-total-item">
            <p class="invoice-total-title">Subtotal:</p>
            <p class="invoice-total-amount">$1800</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Discount:</p>
            <p class="invoice-total-amount">$28</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Tax:</p>
            <p class="invoice-total-amount">21%</p>
          </div>
          <hr class="my-50" />
          <div class="invoice-total-item">
            <p class="invoice-total-title">Total:</p>
            <p class="invoice-total-amount">$1690</p>
          </div>
        </div>
      </div>
    </div>
  
    <hr class="my-2" />
  
    <div class="row">
      <div class="col-12">
        <span class="font-weight-bold">Note:</span>
        <span
          >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
          projects. Thank You!</span
        >
      </div>
    </div> 
  
  </div>


  <div class="invoice-print p-3">


    <hr class="my-2" />
  
    <div class="row pb-2">
      <div class="col-sm-6">
        <h6 class="mb-1">Invoice To:</h6>
        <p class="mb-25">Thomas shelby</p>
        <p class="mb-25">Shelby Company Limited</p>
        <p class="mb-25">Small Heath, B10 0HF, UK</p>
        <p class="mb-25">718-986-6062</p>
        <p class="mb-0">peakyFBlinders@gmail.com</p>
      </div>
      <div class="col-sm-6 mt-sm-0 mt-2">
        <h6 class="mb-1">Payment Details:</h6>
        <table>
          <tbody>
            <tr>
              <td class="pr-1">Total Due:</td>
              <td><strong>$12,110.55</strong></td>
            </tr>
            <tr>
              <td class="pr-1">Bank name:</td>
              <td>American Bank</td>
            </tr>
            <tr>
              <td class="pr-1">Country:</td>
              <td>United States</td>
            </tr>
            <tr>
              <td class="pr-1">IBAN:</td>
              <td>ETD95476213874685</td>
            </tr>
            <tr>
              <td class="pr-1">SWIFT code:</td>
              <td>BR91905</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
    <div class="table-responsive mt-2">
      <table class="table m-0">
        <thead>
          <tr>
            <th class="py-1 pl-4">Task description</th>
            <th class="py-1">Rate</th>
            <th class="py-1">Hours</th>
            <th class="py-1">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Native App Development</p>
              <p class="text-muted text-nowrap">
                Developed a full stack native app using React Native, Bootstrap & Python
              </p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>30</strong>
            </td>
            <td class="py-1">
              <strong>$1,800.00</strong>
            </td>
          </tr>
          <tr class="border-bottom">
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Ui Kit Design</p>
              <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>20</strong>
            </td>
            <td class="py-1">
              <strong>$1200.00</strong>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  
    <div class="row invoice-sales-total-wrapper mt-3">
      <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
        <p class="card-text mb-0">
          <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
        </p>
      </div>
      <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
        <div class="invoice-total-wrapper">
          <div class="invoice-total-item">
            <p class="invoice-total-title">Subtotal:</p>
            <p class="invoice-total-amount">$1800</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Discount:</p>
            <p class="invoice-total-amount">$28</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Tax:</p>
            <p class="invoice-total-amount">21%</p>
          </div>
          <hr class="my-50" />
          <div class="invoice-total-item">
            <p class="invoice-total-title">Total:</p>
            <p class="invoice-total-amount">$1690</p>
          </div>
        </div>
      </div>
    </div>
  
    <hr class="my-2" />
  
    <div class="row">
      <div class="col-12">
        <span class="font-weight-bold">Note:</span>
        <span
          >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
          projects. Thank You!</span
        >
      </div>
    </div> 
  
  </div>


  <div class="invoice-print p-3">


    <hr class="my-2" />
  
    <div class="row pb-2">
      <div class="col-sm-6">
        <h6 class="mb-1">Invoice To:</h6>
        <p class="mb-25">Thomas shelby</p>
        <p class="mb-25">Shelby Company Limited</p>
        <p class="mb-25">Small Heath, B10 0HF, UK</p>
        <p class="mb-25">718-986-6062</p>
        <p class="mb-0">peakyFBlinders@gmail.com</p>
      </div>
      <div class="col-sm-6 mt-sm-0 mt-2">
        <h6 class="mb-1">Payment Details:</h6>
        <table>
          <tbody>
            <tr>
              <td class="pr-1">Total Due:</td>
              <td><strong>$12,110.55</strong></td>
            </tr>
            <tr>
              <td class="pr-1">Bank name:</td>
              <td>American Bank</td>
            </tr>
            <tr>
              <td class="pr-1">Country:</td>
              <td>United States</td>
            </tr>
            <tr>
              <td class="pr-1">IBAN:</td>
              <td>ETD95476213874685</td>
            </tr>
            <tr>
              <td class="pr-1">SWIFT code:</td>
              <td>BR91905</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
    <div class="table-responsive mt-2">
      <table class="table m-0">
        <thead>
          <tr>
            <th class="py-1 pl-4">Task description</th>
            <th class="py-1">Rate</th>
            <th class="py-1">Hours</th>
            <th class="py-1">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Native App Development</p>
              <p class="text-muted text-nowrap">
                Developed a full stack native app using React Native, Bootstrap & Python
              </p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>30</strong>
            </td>
            <td class="py-1">
              <strong>$1,800.00</strong>
            </td>
          </tr>
          <tr class="border-bottom">
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Ui Kit Design</p>
              <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>20</strong>
            </td>
            <td class="py-1">
              <strong>$1200.00</strong>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  
    <div class="row invoice-sales-total-wrapper mt-3">
      <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
        <p class="card-text mb-0">
          <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
        </p>
      </div>
      <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
        <div class="invoice-total-wrapper">
          <div class="invoice-total-item">
            <p class="invoice-total-title">Subtotal:</p>
            <p class="invoice-total-amount">$1800</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Discount:</p>
            <p class="invoice-total-amount">$28</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Tax:</p>
            <p class="invoice-total-amount">21%</p>
          </div>
          <hr class="my-50" />
          <div class="invoice-total-item">
            <p class="invoice-total-title">Total:</p>
            <p class="invoice-total-amount">$1690</p>
          </div>
        </div>
      </div>
    </div>
  
    <hr class="my-2" />
  
    <div class="row">
      <div class="col-12">
        <span class="font-weight-bold">Note:</span>
        <span
          >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
          projects. Thank You!</span
        >
      </div>
    </div> 
  
  </div>


  <div class="invoice-print p-3">


    <hr class="my-2" />
  
    <div class="row pb-2">
      <div class="col-sm-6">
        <h6 class="mb-1">Invoice To:</h6>
        <p class="mb-25">Thomas shelby</p>
        <p class="mb-25">Shelby Company Limited</p>
        <p class="mb-25">Small Heath, B10 0HF, UK</p>
        <p class="mb-25">718-986-6062</p>
        <p class="mb-0">peakyFBlinders@gmail.com</p>
      </div>
      <div class="col-sm-6 mt-sm-0 mt-2">
        <h6 class="mb-1">Payment Details:</h6>
        <table>
          <tbody>
            <tr>
              <td class="pr-1">Total Due:</td>
              <td><strong>$12,110.55</strong></td>
            </tr>
            <tr>
              <td class="pr-1">Bank name:</td>
              <td>American Bank</td>
            </tr>
            <tr>
              <td class="pr-1">Country:</td>
              <td>United States</td>
            </tr>
            <tr>
              <td class="pr-1">IBAN:</td>
              <td>ETD95476213874685</td>
            </tr>
            <tr>
              <td class="pr-1">SWIFT code:</td>
              <td>BR91905</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
    <div class="table-responsive mt-2">
      <table class="table m-0">
        <thead>
          <tr>
            <th class="py-1 pl-4">Task description</th>
            <th class="py-1">Rate</th>
            <th class="py-1">Hours</th>
            <th class="py-1">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Native App Development</p>
              <p class="text-muted text-nowrap">
                Developed a full stack native app using React Native, Bootstrap & Python
              </p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>30</strong>
            </td>
            <td class="py-1">
              <strong>$1,800.00</strong>
            </td>
          </tr>
          <tr class="border-bottom">
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Ui Kit Design</p>
              <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>20</strong>
            </td>
            <td class="py-1">
              <strong>$1200.00</strong>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  
    <div class="row invoice-sales-total-wrapper mt-3">
      <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
        <p class="card-text mb-0">
          <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
        </p>
      </div>
      <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
        <div class="invoice-total-wrapper">
          <div class="invoice-total-item">
            <p class="invoice-total-title">Subtotal:</p>
            <p class="invoice-total-amount">$1800</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Discount:</p>
            <p class="invoice-total-amount">$28</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Tax:</p>
            <p class="invoice-total-amount">21%</p>
          </div>
          <hr class="my-50" />
          <div class="invoice-total-item">
            <p class="invoice-total-title">Total:</p>
            <p class="invoice-total-amount">$1690</p>
          </div>
        </div>
      </div>
    </div>
  
    <hr class="my-2" />
  
    <div class="row">
      <div class="col-12">
        <span class="font-weight-bold">Note:</span>
        <span
          >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
          projects. Thank You!</span
        >
      </div>
    </div> 
  
  </div>


  <div class="invoice-print p-3">


    <hr class="my-2" />
  
    <div class="row pb-2">
      <div class="col-sm-6">
        <h6 class="mb-1">Invoice To:</h6>
        <p class="mb-25">Thomas shelby</p>
        <p class="mb-25">Shelby Company Limited</p>
        <p class="mb-25">Small Heath, B10 0HF, UK</p>
        <p class="mb-25">718-986-6062</p>
        <p class="mb-0">peakyFBlinders@gmail.com</p>
      </div>
      <div class="col-sm-6 mt-sm-0 mt-2">
        <h6 class="mb-1">Payment Details:</h6>
        <table>
          <tbody>
            <tr>
              <td class="pr-1">Total Due:</td>
              <td><strong>$12,110.55</strong></td>
            </tr>
            <tr>
              <td class="pr-1">Bank name:</td>
              <td>American Bank</td>
            </tr>
            <tr>
              <td class="pr-1">Country:</td>
              <td>United States</td>
            </tr>
            <tr>
              <td class="pr-1">IBAN:</td>
              <td>ETD95476213874685</td>
            </tr>
            <tr>
              <td class="pr-1">SWIFT code:</td>
              <td>BR91905</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
    <div class="table-responsive mt-2">
      <table class="table m-0">
        <thead>
          <tr>
            <th class="py-1 pl-4">Task description</th>
            <th class="py-1">Rate</th>
            <th class="py-1">Hours</th>
            <th class="py-1">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Native App Development</p>
              <p class="text-muted text-nowrap">
                Developed a full stack native app using React Native, Bootstrap & Python
              </p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>30</strong>
            </td>
            <td class="py-1">
              <strong>$1,800.00</strong>
            </td>
          </tr>
          <tr class="border-bottom">
            <td class="py-1 pl-4">
              <p class="font-weight-semibold mb-25">Ui Kit Design</p>
              <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
            </td>
            <td class="py-1">
              <strong>$60.00</strong>
            </td>
            <td class="py-1">
              <strong>20</strong>
            </td>
            <td class="py-1">
              <strong>$1200.00</strong>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  
    <div class="row invoice-sales-total-wrapper mt-3">
      <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
        <p class="card-text mb-0">
          <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
        </p>
      </div>
      <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
        <div class="invoice-total-wrapper">
          <div class="invoice-total-item">
            <p class="invoice-total-title">Subtotal:</p>
            <p class="invoice-total-amount">$1800</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Discount:</p>
            <p class="invoice-total-amount">$28</p>
          </div>
          <div class="invoice-total-item">
            <p class="invoice-total-title">Tax:</p>
            <p class="invoice-total-amount">21%</p>
          </div>
          <hr class="my-50" />
          <div class="invoice-total-item">
            <p class="invoice-total-title">Total:</p>
            <p class="invoice-total-amount">$1690</p>
          </div>
        </div>
      </div>
    </div>
  
    <hr class="my-2" />
  
    <div class="row">
      <div class="col-12">
        <span class="font-weight-bold">Note:</span>
        <span
          >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
          projects. Thank You!</span
        >
      </div>
    </div> 
  
  </div>


<div class="invoice-print p-3">


  <hr class="my-2" />

  <div class="row pb-2">
    <div class="col-sm-6">
      <h6 class="mb-1">Invoice To:</h6>
      <p class="mb-25">Thomas shelby</p>
      <p class="mb-25">Shelby Company Limited</p>
      <p class="mb-25">Small Heath, B10 0HF, UK</p>
      <p class="mb-25">718-986-6062</p>
      <p class="mb-0">peakyFBlinders@gmail.com</p>
    </div>
    <div class="col-sm-6 mt-sm-0 mt-2">
      <h6 class="mb-1">Payment Details:</h6>
      <table>
        <tbody>
          <tr>
            <td class="pr-1">Total Due:</td>
            <td><strong>$12,110.55</strong></td>
          </tr>
          <tr>
            <td class="pr-1">Bank name:</td>
            <td>American Bank</td>
          </tr>
          <tr>
            <td class="pr-1">Country:</td>
            <td>United States</td>
          </tr>
          <tr>
            <td class="pr-1">IBAN:</td>
            <td>ETD95476213874685</td>
          </tr>
          <tr>
            <td class="pr-1">SWIFT code:</td>
            <td>BR91905</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="table-responsive mt-2">
    <table class="table m-0">
      <thead>
        <tr>
          <th class="py-1 pl-4">Task description</th>
          <th class="py-1">Rate</th>
          <th class="py-1">Hours</th>
          <th class="py-1">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-1 pl-4">
            <p class="font-weight-semibold mb-25">Native App Development</p>
            <p class="text-muted text-nowrap">
              Developed a full stack native app using React Native, Bootstrap & Python
            </p>
          </td>
          <td class="py-1">
            <strong>$60.00</strong>
          </td>
          <td class="py-1">
            <strong>30</strong>
          </td>
          <td class="py-1">
            <strong>$1,800.00</strong>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-1 pl-4">
            <p class="font-weight-semibold mb-25">Ui Kit Design</p>
            <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
          </td>
          <td class="py-1">
            <strong>$60.00</strong>
          </td>
          <td class="py-1">
            <strong>20</strong>
          </td>
          <td class="py-1">
            <strong>$1200.00</strong>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="row invoice-sales-total-wrapper mt-3">
    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
      <p class="card-text mb-0">
        <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
      </p>
    </div>
    <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
      <div class="invoice-total-wrapper">
        <div class="invoice-total-item">
          <p class="invoice-total-title">Subtotal:</p>
          <p class="invoice-total-amount">$1800</p>
        </div>
        <div class="invoice-total-item">
          <p class="invoice-total-title">Discount:</p>
          <p class="invoice-total-amount">$28</p>
        </div>
        <div class="invoice-total-item">
          <p class="invoice-total-title">Tax:</p>
          <p class="invoice-total-amount">21%</p>
        </div>
        <hr class="my-50" />
        <div class="invoice-total-item">
          <p class="invoice-total-title">Total:</p>
          <p class="invoice-total-amount">$1690</p>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-2" />

  <div class="row">
    <div class="col-12">
      <span class="font-weight-bold">Note:</span>
      <span
        >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
        projects. Thank You!</span
      >
    </div>
  </div> 

</div>


<div class="invoice-print p-3">


  <hr class="my-2" />

  <div class="row pb-2">
    <div class="col-sm-6">
      <h6 class="mb-1">Invoice To:</h6>
      <p class="mb-25">Thomas shelby</p>
      <p class="mb-25">Shelby Company Limited</p>
      <p class="mb-25">Small Heath, B10 0HF, UK</p>
      <p class="mb-25">718-986-6062</p>
      <p class="mb-0">peakyFBlinders@gmail.com</p>
    </div>
    <div class="col-sm-6 mt-sm-0 mt-2">
      <h6 class="mb-1">Payment Details:</h6>
      <table>
        <tbody>
          <tr>
            <td class="pr-1">Total Due:</td>
            <td><strong>$12,110.55</strong></td>
          </tr>
          <tr>
            <td class="pr-1">Bank name:</td>
            <td>American Bank</td>
          </tr>
          <tr>
            <td class="pr-1">Country:</td>
            <td>United States</td>
          </tr>
          <tr>
            <td class="pr-1">IBAN:</td>
            <td>ETD95476213874685</td>
          </tr>
          <tr>
            <td class="pr-1">SWIFT code:</td>
            <td>BR91905</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="table-responsive mt-2">
    <table class="table m-0">
      <thead>
        <tr>
          <th class="py-1 pl-4">Task description</th>
          <th class="py-1">Rate</th>
          <th class="py-1">Hours</th>
          <th class="py-1">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-1 pl-4">
            <p class="font-weight-semibold mb-25">Native App Development</p>
            <p class="text-muted text-nowrap">
              Developed a full stack native app using React Native, Bootstrap & Python
            </p>
          </td>
          <td class="py-1">
            <strong>$60.00</strong>
          </td>
          <td class="py-1">
            <strong>30</strong>
          </td>
          <td class="py-1">
            <strong>$1,800.00</strong>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-1 pl-4">
            <p class="font-weight-semibold mb-25">Ui Kit Design</p>
            <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
          </td>
          <td class="py-1">
            <strong>$60.00</strong>
          </td>
          <td class="py-1">
            <strong>20</strong>
          </td>
          <td class="py-1">
            <strong>$1200.00</strong>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="row invoice-sales-total-wrapper mt-3">
    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
      <p class="card-text mb-0">
        <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
      </p>
    </div>
    <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
      <div class="invoice-total-wrapper">
        <div class="invoice-total-item">
          <p class="invoice-total-title">Subtotal:</p>
          <p class="invoice-total-amount">$1800</p>
        </div>
        <div class="invoice-total-item">
          <p class="invoice-total-title">Discount:</p>
          <p class="invoice-total-amount">$28</p>
        </div>
        <div class="invoice-total-item">
          <p class="invoice-total-title">Tax:</p>
          <p class="invoice-total-amount">21%</p>
        </div>
        <hr class="my-50" />
        <div class="invoice-total-item">
          <p class="invoice-total-title">Total:</p>
          <p class="invoice-total-amount">$1690</p>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-2" />

  <div class="row">
    <div class="col-12">
      <span class="font-weight-bold">Note:</span>
      <span
        >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
        projects. Thank You!</span
      >
    </div>
  </div> 

</div>


<div class="invoice-print p-3">


  <hr class="my-2" />

  <div class="row pb-2">
    <div class="col-sm-6">
      <h6 class="mb-1">Invoice To:</h6>
      <p class="mb-25">Thomas shelby</p>
      <p class="mb-25">Shelby Company Limited</p>
      <p class="mb-25">Small Heath, B10 0HF, UK</p>
      <p class="mb-25">718-986-6062</p>
      <p class="mb-0">peakyFBlinders@gmail.com</p>
    </div>
    <div class="col-sm-6 mt-sm-0 mt-2">
      <h6 class="mb-1">Payment Details:</h6>
      <table>
        <tbody>
          <tr>
            <td class="pr-1">Total Due:</td>
            <td><strong>$12,110.55</strong></td>
          </tr>
          <tr>
            <td class="pr-1">Bank name:</td>
            <td>American Bank</td>
          </tr>
          <tr>
            <td class="pr-1">Country:</td>
            <td>United States</td>
          </tr>
          <tr>
            <td class="pr-1">IBAN:</td>
            <td>ETD95476213874685</td>
          </tr>
          <tr>
            <td class="pr-1">SWIFT code:</td>
            <td>BR91905</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="table-responsive mt-2">
    <table class="table m-0">
      <thead>
        <tr>
          <th class="py-1 pl-4">Task description</th>
          <th class="py-1">Rate</th>
          <th class="py-1">Hours</th>
          <th class="py-1">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-1 pl-4">
            <p class="font-weight-semibold mb-25">Native App Development</p>
            <p class="text-muted text-nowrap">
              Developed a full stack native app using React Native, Bootstrap & Python
            </p>
          </td>
          <td class="py-1">
            <strong>$60.00</strong>
          </td>
          <td class="py-1">
            <strong>30</strong>
          </td>
          <td class="py-1">
            <strong>$1,800.00</strong>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-1 pl-4">
            <p class="font-weight-semibold mb-25">Ui Kit Design</p>
            <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
          </td>
          <td class="py-1">
            <strong>$60.00</strong>
          </td>
          <td class="py-1">
            <strong>20</strong>
          </td>
          <td class="py-1">
            <strong>$1200.00</strong>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="row invoice-sales-total-wrapper mt-3">
    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
      <p class="card-text mb-0">
        <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
      </p>
    </div>
    <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
      <div class="invoice-total-wrapper">
        <div class="invoice-total-item">
          <p class="invoice-total-title">Subtotal:</p>
          <p class="invoice-total-amount">$1800</p>
        </div>
        <div class="invoice-total-item">
          <p class="invoice-total-title">Discount:</p>
          <p class="invoice-total-amount">$28</p>
        </div>
        <div class="invoice-total-item">
          <p class="invoice-total-title">Tax:</p>
          <p class="invoice-total-amount">21%</p>
        </div>
        <hr class="my-50" />
        <div class="invoice-total-item">
          <p class="invoice-total-title">Total:</p>
          <p class="invoice-total-amount">$1690</p>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-2" />

  <div class="row">
    <div class="col-12">
      <span class="font-weight-bold">Note:</span>
      <span
        >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
        projects. Thank You!</span
      >
    </div>
  </div> 

</div>


<div class="invoice-print p-3">


  <hr class="my-2" />

  <div class="row pb-2">
    <div class="col-sm-6">
      <h6 class="mb-1">Invoice To:</h6>
      <p class="mb-25">Thomas shelby</p>
      <p class="mb-25">Shelby Company Limited</p>
      <p class="mb-25">Small Heath, B10 0HF, UK</p>
      <p class="mb-25">718-986-6062</p>
      <p class="mb-0">peakyFBlinders@gmail.com</p>
    </div>
    <div class="col-sm-6 mt-sm-0 mt-2">
      <h6 class="mb-1">Payment Details:</h6>
      <table>
        <tbody>
          <tr>
            <td class="pr-1">Total Due:</td>
            <td><strong>$12,110.55</strong></td>
          </tr>
          <tr>
            <td class="pr-1">Bank name:</td>
            <td>American Bank</td>
          </tr>
          <tr>
            <td class="pr-1">Country:</td>
            <td>United States</td>
          </tr>
          <tr>
            <td class="pr-1">IBAN:</td>
            <td>ETD95476213874685</td>
          </tr>
          <tr>
            <td class="pr-1">SWIFT code:</td>
            <td>BR91905</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="table-responsive mt-2">
    <table class="table m-0">
      <thead>
        <tr>
          <th class="py-1 pl-4">Task description</th>
          <th class="py-1">Rate</th>
          <th class="py-1">Hours</th>
          <th class="py-1">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-1 pl-4">
            <p class="font-weight-semibold mb-25">Native App Development</p>
            <p class="text-muted text-nowrap">
              Developed a full stack native app using React Native, Bootstrap & Python
            </p>
          </td>
          <td class="py-1">
            <strong>$60.00</strong>
          </td>
          <td class="py-1">
            <strong>30</strong>
          </td>
          <td class="py-1">
            <strong>$1,800.00</strong>
          </td>
        </tr>
        <tr class="border-bottom">
          <td class="py-1 pl-4">
            <p class="font-weight-semibold mb-25">Ui Kit Design</p>
            <p class="text-muted text-nowrap">Designed a UI kit for native app using Sketch, Figma & Adobe XD</p>
          </td>
          <td class="py-1">
            <strong>$60.00</strong>
          </td>
          <td class="py-1">
            <strong>20</strong>
          </td>
          <td class="py-1">
            <strong>$1200.00</strong>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="row invoice-sales-total-wrapper mt-3">
    <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
      <p class="card-text mb-0">
        <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
      </p>
    </div>
    <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
      <div class="invoice-total-wrapper">
        <div class="invoice-total-item">
          <p class="invoice-total-title">Subtotal:</p>
          <p class="invoice-total-amount">$1800</p>
        </div>
        <div class="invoice-total-item">
          <p class="invoice-total-title">Discount:</p>
          <p class="invoice-total-amount">$28</p>
        </div>
        <div class="invoice-total-item">
          <p class="invoice-total-title">Tax:</p>
          <p class="invoice-total-amount">21%</p>
        </div>
        <hr class="my-50" />
        <div class="invoice-total-item">
          <p class="invoice-total-title">Total:</p>
          <p class="invoice-total-amount">$1690</p>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-2" />

  <div class="row">
    <div class="col-12">
      <span class="font-weight-bold">Note:</span>
      <span
        >It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance
        projects. Thank You!</span
      >
    </div>
  </div> 

</div>
            

{{-- footer --}}
<div class="d-flex justify-content-between flex-md-row flex-column pb-2 footer">
  <div>
    <div class="d-flex mb-1"> 
      <img class="img" src="https://cdn.mosoah.com/wp-content/uploads/2019/11/05171421/%D8%B5%D9%88%D8%B1-%D8%B4%D8%B9%D8%A7%D8%B1-%D8%B1%D8%A4%D9%8A%D8%A9-%D9%88%D8%B7%D9%86-%D8%AC%D8%AF%D9%8A%D8%AF%D8%A95-746x510.jpg"  />

    </div>
    <p class="mb-25">Office 149, 450 South Brand Brooklyn</p>
    <p class="mb-25">San Diego County, CA 91905, USA</p>
    <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
  </div>
  
  <div> 
    <div class="d-flex mb-1">   
        <img  class="img" src="http://127.0.0.1:8000/uploads/image/setting/logo.png" >  
    </div>
    <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
  </div>

  <div class="mt-md-0 mt-2">
    <h4 class="font-weight-bold text-right mb-1">INVOICE #3492</h4>
    <div class="invoice-date-wrapper mb-50">
      <span class="invoice-date-title">Date Issued:</span>
      <span class="font-weight-bold"> 25/08/2020</span>
    </div>
    <div class="invoice-date-wrapper">
      <span class="invoice-date-title">Due Date:</span>
      <span class="font-weight-bold">29/08/2020</span>
    </div>
  </div>
</div>
@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/app-invoice-print.js')}}"></script>
@endsection
