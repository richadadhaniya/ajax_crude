<form  method="" action="" enctype="multipart/form-data">
                                     @csrf

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered" border="1">
                                    <thead>
                                        <tr>
                                            <th>city</th>
                                            <th>vehicle</th>
                                            <th>date</th>
                                            <th>booking_type</th>
                                            <th>half_day</th>
                                            <th>hourly</th>
                                            <th>destination</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($forms as $forms)
                                       <tr>
                                           
                                        <td>{{ $forms->city }}</td>
                                        <td>{{ $forms->vehicle }}</td> <td>{{ $forms->date }}</td> <td>{{ $forms->booking_type }}</td> <td>{{ $forms->half_day }}</td> <td>{{ $forms->hourly }}</td> <td>{{ $forms->destination }}</td>  
                                           
                                           
                                            
                                           
                                       </tr>
                                       @endforeach
 
                                    </tbody>
                                </table>
                            </form>