     @extends('dashboard.layout.main')
     @section('container2')
         <div class="col p-5 mb-4 bg-light rounded-3">
             <div class="container-fluid py-5">
                 <table id="datatable" class="table">
                     <thead>
                         @php $no = 0; @endphp
                         <tr>
                             <th>No</th>
                             <th>Isi Ulasan</th>
                             <th>Nama Kota</th>
                         </tr>
                     </thead>

                     @foreach ($Historis as $h)
                         <tbody>
                             @php
                                 $no++;
                             @endphp
                             <tr>
                                 <td>{{ $no }}</td>
                                 <td>{{ $h->isi_ulasan }}</td>
                                 <td>{{ $h->nama_kota }}</td>
                             </tr>
                         </tbody>
                     @endforeach
                 </table>
             </div>
         </div>
     @endsection
