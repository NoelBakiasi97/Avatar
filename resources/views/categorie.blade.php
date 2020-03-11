<div class="container wow fadeInUp my-4">
        <div class="row text-center">
          <div class="col-md-12">
            <h3 class="section-title">Users</h3>
            <div class="section-title-divider"></div>
          </div>
        </div>
      </div>
      <section id="myMessages" class="wow fadeInRight py-5">
        <div class="container text-center">
            <div>
                <table class="table table-striped">
                    <thead class="bg-danger">
                        <tr>
                            <th scope="col" class="text-center text-white">Nom</th>
                            <th scope="col" class="text-center text-white">Image</th>
                            <th scope="col" class="text-center text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       {{-- FOR EACH --}}
                        <tr>
                        <th scope="row" class="text-center"></th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="d-flex justify-content-around">
                                <a href="" class="deleteMsg" title="Show">
                                    <i class="text-success fa-2x fas fa-eye"></i>
                                </a>
                                <a href="" title="Edit">
                                    <i class="text-warning fa-2x fas fa-edit"></i>
                                </a>
                                <a href="" class="deleteMsg" title="Delete">
                                    <i class="text-danger fa-2x fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        {{-- END FOR EACH --}}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    