<!-- BEGIN: Footer-->
<footer class="footer {{($configData['footerType']=== 'footer-hidden') ? 'd-none':''}} footer-light" style="margin-right: 260px !important; margin-left: 0px !important;">
  <p class="clearfix mb-0">
    <span class="float-md-left d-block d-md-inline-block mt-25">جميع الحقوق محفوظة &copy; <script>document.write(new Date().getFullYear())</script><a class="ml-25" href="{{url('/')}}" target="_blank">{{$settings->name}}</a>
      {{-- <span class="d-none d-sm-inline-block">, All rights Reserved</span> --}}
    </span>
    <span class="float-md-right d-none d-md-block">تطوير شركة ..... <i data-feather="heart"></i></span>
  </p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->