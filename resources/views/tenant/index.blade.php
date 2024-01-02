@extends('layouts.mainlayout')
@section('usertable')

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header  ">
        <button type="button " class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h5 class="modal-title d-flex justify-content-end" id="deleteModalLabel">تأكيد الحذف</h5>
      </div>
      <div class="modal-body">
        <p>هل أنت متأكد أنك تريد حذف هذه السجل</p>
      </div>
      <div class="modal-footer d-flex justify-content-start">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-danger">حذف</button>
      </div>
    </div>
  </div>
</div>

    <div class="pagetitle">
      <h1>سجل الشركات</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between mt-2">

                <h5 class="card-title fs-3">المنظمات</h5>
                <button class="create float-right"><a style="color: white" href="{{ route('tenant.create') }}">أضافه</a></button>
              </div>
              
              <p></p>

              <!-- Table with stripped rows -->
              <table dir="rtl" id="listTable" class="table ">
                <thead>
                  <tr>
                    <th colspan="1">
                      الاسم
                    </th>
                    <th colspan="1">
                      الشعار
                    </th>
                    <th colspan="1">
                      البريد الالكتروني
                    </th>
                
                    <th colspan="1">
                      المدينه
                    </th>
                   
                
                    <th colspan="4">الإجراءت</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($companies as $company )
                    
                  <tr>
                    <td>{{ $company->name }}</td>
                    <td><img src="{{ asset('uploads/companies/'.$company->logo) }}" height="50px" width="70px" alt=""></td>
                    <td>{{ $company->EmailAddress }}</td>
                    <td>{{ $company->city }}</td>
                
                    <td>
                       <button class="btn"><a href="{{ route('tenant.show',$company->id) }}"><i class="bi bi-eye"></i></a></button>
                       <button class="btn"><a href="{{ route('tenant.edit',$company->id) }}"><i class="bi bi-pen"></i></a></button>
                      <button class="btn"><a href="{{ route('tenant.delete',$company->id) }}"><i class="bi bi-trash"></i></a></button>
                      {{-- <button class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal"><a><i class="bi bi-trash"></i></a></button> --}}
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  @endsection