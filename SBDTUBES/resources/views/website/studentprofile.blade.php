@extends('layouts.main_user')

@section('title', 'Student Profile')
@section('style')

<style>
  a:link {
    text-decoration: none;
  }


  .expandable {
    background: #fff;
    overflow: hidden;
    color: #000;
    line-height: 50px;

    transition: all .5s ease-in-out;
    height: 0;
  }

  .expandable:target {
    height: auto;
  }
</style>
@endsection
@section('content')

<div class="container-fluid" style="width:70%">
  <div class="row">
    <div style="display: table; height: 400px; overflow: hidden;" class="col-3">
      <div style="display: table-cell; vertical-align: middle;">
        <Span><a href="#nav">All</a></Span>
        <br><br>
        <span><a href="#turned">Turned in</a></span>
        <br><br>
        <span><a href="#returned">Returned</a></span>
        <br><br>
        <span><a href="#missing">Missing</a></span>
      </div>
    </div>
    <div class="col-7">
      <div class="row">
        <div class="col-2"><img class="rounded-circle" src="img/person.png" style="height: 75px; height: 75px" alt=""></div>
        <div class="col-10">
          <h1>Paulus Sigalingging</h1>
        </div>
      </div>
      <hr>
      <a href="#nav" id="nav"></a>
      <div class="row">
        <div class="col card shadow border-0" style="border-radius: 10px;">
          <div class="card-body">
            <div id="content">
              <a href="#nav1">
                <div class="row">
                  <div class="col-6 text-dark">
                    <h5>tanya coba coba</h5>
                  </div>
                  <div class="col-3 text-secondary">
                    <h6>No due date</h6>
                  </div>
                  <div class="col-3 text-dark">
                    <h5>Assigned</h5>
                  </div>
                </div>
              </a>
              <div class="expandable" id="nav1">
                <hr />
                <div class="mx-5">
                  <div class="row">No due date</div>
                </div>
                <hr>
                <div class="row mx-1">
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col card shadow border-0" style="border-radius: 10px;">
          <div class="card-body">
            <div id="content">
              <a href="#nav2">
                <div class="row">
                  <div class="col-6 text-dark">
                    <h5>tanya coba coba</h5>
                  </div>
                  <div class="col-3 text-secondary">
                    <h6>No due date</h6>
                  </div>
                  <div class="col-3 text-dark">
                    <h5>Assigned</h5>
                  </div>
                </div>
              </a>
              <div class="expandable" id="nav2">
                <hr />
                <div class="mx-5">
                  <div class="row">No due date</div>
                </div>
                <hr>
                <div class="row mx-1">
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col card shadow border-0" style="border-radius: 10px;">
          <div class="card-body">
            <div id="content">
              <a href="#nav3">
                <div class="row">
                  <div class="col-6 text-dark">
                    <h5>tanya coba coba</h5>
                  </div>
                  <div class="col-3 text-secondary">
                    <h6>No due date</h6>
                  </div>
                  <div class="col-3 text-dark">
                    <h5>Assigned</h5>
                  </div>
                </div>
              </a>
              <div class="expandable" id="nav3">
                <hr />
                <div class="mx-5">
                  <div class="row">No due date</div>
                </div>
                <hr>
                <div class="row mx-1">
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <h2 id="turned">Turned in</h2>
      <div class="row">
        <div class="col card shadow border-0" style="border-radius: 10px;">
          <div class="card-body">
            <div id="content">
              <a href="#nav4">
                <div class="row">
                  <div class="col-6 text-dark">
                    <h5>tanya coba coba</h5>
                  </div>
                  <div class="col-3 text-secondary">
                    <h6>No due date</h6>
                  </div>
                  <div class="col-3 text-dark">
                    <h5>Assigned</h5>
                  </div>
                </div>
              </a>
              <div class="expandable" id="nav4">
                <hr />
                <div class="mx-5">
                  <div class="row">No due date</div>
                </div>
                <hr>
                <div class="row mx-1">
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <h2 id="returned">Returned</h2>
      <div class="row">
        <div class="col card shadow border-0" style="border-radius: 10px;">
          <div class="card-body">
            <div id="content">
              <a href="#nav1">
                <div class="row">
                  <div class="col-6 text-dark">
                    <h5>tanya coba coba</h5>
                  </div>
                  <div class="col-3 text-secondary">
                    <h6>No due date</h6>
                  </div>
                  <div class="col-3 text-dark">
                    <h5>Assigned</h5>
                  </div>
                </div>
              </a>
              <div class="expandable" id="nav1">
                <hr />
                <div class="mx-5">
                  <div class="row">No due date</div>
                </div>
                <hr>
                <div class="row mx-1">
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <h2 id="missing">Missing</h2>
      <div class="row">
        <div class="col card shadow border-0" style="border-radius: 10px;">
          <div class="card-body">
            <div id="content">
              <a href="#nav1">
                <div class="row">
                  <div class="col-6 text-dark">
                    <h5>tanya coba coba</h5>
                  </div>
                  <div class="col-3 text-secondary">
                    <h6>No due date</h6>
                  </div>
                  <div class="col-3 text-dark">
                    <h5>Assigned</h5>
                  </div>
                </div>
              </a>
              <div class="expandable" id="nav1">
                <hr />
                <div class="mx-5">
                  <div class="row">No due date</div>
                </div>
                <hr>
                <div class="row mx-1">
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="col-2"></div>
</div>
</div>


@endsection