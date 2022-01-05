 <form  method="POST" action="" enctype="multipart/form-data">
                                     @csrf
                                      
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                       <tr>
                                          <td height="50">{{$form->email}}</td>
                                          <td><input type="text" name="email" value="">
                                              
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                          <td height="50">{{$form->email}}</td>
                                          <td><textarea name="password"></textarea>
                                             
                                            </td>
                                            
                                          </tr>
                                          
                                          
                                         
                                          
                                    </thead>
                                    <tbody>
                                      
                                       
                                       <tr>
                                          <td height="50"></td>
                                          <td><input type="submit" name="submit" value="save"></td>
                                           <td><input type="submit" name="submit" value="update"></td>
                                        </tr>
 
                                    </tbody>
                                     
                                </table>
                            </form>s