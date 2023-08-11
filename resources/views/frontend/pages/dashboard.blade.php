

@extends('layouts.frontend.innermaster')


@section('content')
<main id="main">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h1><?=$page_title?></h1>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          
         
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

 <div class="container">
  {{-- <div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="meme card-success card-outline">
        <div class="card-header">
          <h4 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Farmer numbers by year of starting group
          </h4>
        
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content p-0">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="saleschart">

              <div id="container"></div>
                                    
          </div>  
            
          </div>
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
 <section class="col-lg-5 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="meme card-success card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-users"></i>
              Farmers per County
            </h3>
          
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <div id="container2"></div>
            </div>
          </div><!-- /.card-body -->
        </div>
    
    </section>
  
  </div> --}}



  <div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="meme card-success card-outline">
        <div class="card-header" >
          <h4 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Farmer Linked to Finance services
          </h4>
        
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content p-0">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="saleschart">

              <div id="container7"></div>
                                    
          </div>  
            
          </div>
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
 <section class="col-lg-5 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="meme card-success card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-users"></i>
             Farmers Linked to Market
            </h3>
          
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <div id="container8"></div>
            </div>
          </div><!-- /.card-body -->
        </div>
    
    </section>
  
  </div>

  <div class="row">
    <section class="col-lg-12 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="meme card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-users"></i>
            Income Generated per Value Chain
          </h3>
        
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content p-0">
            <div id="container6"></div>
          </div>
        </div><!-- /.card-body -->
      </div>
  
  </section>

</div>

  <div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="meme card-success card-outline">
        <div class="card-header" >
          <h4 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Technology Adoption
          </h4>
        
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content p-0">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="saleschart">

              <div id="container9"></div>
                                    
          </div>  
            
          </div>
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
 <section class="col-lg-5 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="meme card-success card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-users"></i>
              Farmers Reached Directly
            </h3>
          
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <div id="container10"></div>
            </div>
          </div><!-- /.card-body -->
        </div>
    
    </section>
  
  </div>


<div class="row">

  <section class="col-lg-12 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="meme card-success card-outline">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-users"></i>
         Value Chain Up-scalling and Research
        </h3>
      
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content p-0">
          <div id="container5"></div>
        </div>
      </div><!-- /.card-body -->
    </div>

</section>

</div>
 </div>

</main><!-- End #main -->
@endsection


@section('scripts')

<style>
  .card-header{
    background-color: #20b15e;
    height: 50px
  }

  .meme{
  box-shadow: 
   5px 5px 10px 5px rgb(43, 42, 42),
   -5px 0px  rgb(158, 158, 158);
      border-radius: 5px; 
     }
     .card-title{
      color: aliceblue;
     }

</style>

  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>



            <script>
                            

              var url="<?=url('/farmerspercounty')?>";
              
              $.get(url,function(data){
            Highcharts.chart('container2', {
            chart: {
            type: 'pie'
            },
            title: {
            text: 'Farmers Per County'
            },

            accessibility: {
            announceNewData: {
            enabled: true
            }
            },
            xAxis: {
            type: 'category'
            },
            yAxis: {
            title: {
            text: 'Total Farmers'
            }

            },

            plotOptions: {
        series: {
            borderRadius: 5,
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },
            legend: {
            enabled: false
            },
            plotOptions: {
            series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              // format: '{point.y}'
              format: '{point.name}: {point.y:.1f}%'
            }
            }
            },
            credits:{
                // text: ' AgriFi CS APP'
                enabled:false
              },

            tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
            },

            series: [
            {
            name: "Number",
            colorByPoint: true,
            data: data
            }
            ],

            });



              });
              


            
            </script>


          <script>
            

          var url="<?=url('/farmersingroups')?>";
          $.get(url,function(data){
          console.log(data);

          Highcharts.chart('container', {
          chart: {
          type: 'column'
          },
          title: {
          text: 'Farmers Per Year'
          },

          accessibility: {
          announceNewData: {
          enabled: true
          }
          },
          xAxis: {
            type: 'category'
          },
          
          yAxis: {
          title: {
          text: 'Total Farmers'
          }

          },
          credits:{
                // text: ' AgriFi CS APP'
                enabled:false
              },
          legend: {
          enabled: false
          },
          plotOptions: {
          series: {
          borderWidth: 0,
          dataLabels: {
          enabled: true,
          format: '{point.y}'
          }
          }
          },

          tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
          },

          series: [
          {
          name: "Number",
          colorByPoint: true,
          data: data
          }
          ],

          });



          });


          </script>

              <script>
                

              var url="<?=url('/bydistance')?>";
              $.get(url,function(data){


              Highcharts.chart('container3', {
              chart: {
              type: 'area'
              },
              title: {
              text: ' Distance To Market (In Kilometers)'
              },

              accessibility: {
              announceNewData: {
              enabled: true
              }
              },
              xAxis: {
              type: 'category'
              },
              yAxis: {
              title: {
              text: 'Number of Farmers'
              }

              },
              credits:{
                // text: ' AgriFi CS APP'
                enabled:false
              },
              legend: {
              enabled: false
              },
              plotOptions: {
              series: {
              borderWidth: 0,
              dataLabels: {
              enabled: true,
              format: '{point.y}'
              }
              }
              },

              tooltip: {
              headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
              },

              series: [
              {
              name: "Number",
              colorByPoint: true,
              data: data
              }
              ],

              });



              });




              </script>

            <script>
                            

              var url="<?=url('/bygender')?>";
              $.get(url,function(data){
              Highcharts.chart('container4', {
              chart: {
              type: 'column'
              },
              title: {
              text: ' Farmers By Gender'
              },

              accessibility: {
              announceNewData: {
              enabled: true
              }
              },

              xAxis: {
              type: 'category'
              },
              yAxis: {
              title: {
              text: 'Males'
              }

              },
              credits:{
                // text: ' AgriFi CS APP'
                enabled:false
              },
              legend: {
              enabled: false
              },
              plotOptions: {
              series: {
              borderWidth: 0,
              dataLabels: {
              enabled: true,
              format: '{point.y}'
              }
              }
              },

              tooltip: {
              headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
              pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
              },

              series: [
              {
              name: "Number",
              colorByPoint: true,
              data: data
              }
              ],

              });



              });




              </script>
           

           <script>
            var data = @json($incomeperValuechain);
          
            Highcharts.chart('container5', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Up-scalling partners & Research Activities'
                },
                xAxis: {
                    categories: data.map(item => item.valuechain)
                },
                yAxis: {
                    title: {
                        text: 'Count'
                    }
                },
                credits:{
                      // text: ' AgriFi CS APP'
                      enabled:false
                    },
          
                    plotOptions: {
                  series: {
                  borderWidth: 0,
                  dataLabels: {
                  enabled: true,
                  format: '{point.y}'
                  }
                  }
                },
          
                series: [{
                    name: 'Up-Scalling',
                    color: "#20b15e",
                    data: data.map(item => item.upscalling)
                }
                , {
                    name: 'Research',
                    color: "#a37153",
                    data: data.map(item => item.research)
                }
              
              ]
            });
          </script>
          
        
<script>
  var data = @json($incomeperValuechain);

  Highcharts.chart('container6', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Income,Up-scalling & Research'
      },
      xAxis: {
          categories: data.map(item => item.valuechain)
      },
      yAxis: {
          title: {
              text: 'Count'
          }
      },
      credits:{
            // text: ' AgriFi CS APP'
            enabled:false
          },

          plotOptions: {
        series: {
        borderWidth: 0,
        dataLabels: {
        enabled: true,
        format: '{point.y}'
        }
        }
      },

      series: [{
          name: 'Income',
          color: "#20b15e",
          data: data.map(item => item.income)
      }
      
    ]
  });
</script>
        
        <script>
          var data = @json($financeLinkage);
  
          Highcharts.chart('container7', {
              chart: {
                  type: 'column'
              },
              title: {
                  text: 'Finance Linkage'
              },
              xAxis: {
                  categories: data.map(item => item.description)
              },
              yAxis: {
                  title: {
                      text: 'Count'
                  }
              },
              credits:{
                    // text: ' AgriFi CS APP'
                    enabled:false
                  },
  
                  plotOptions: {
                series: {
                borderWidth: 0,
                dataLabels: {
                enabled: true,
                format: '{point.y}'
                }
                }
              },

              series: [{
                  name: 'Target',
                  color: "#20b15e",
                  data: data.map(item => item.target)
              }, {
                  name: 'Achieved',
                  color: "#a37153",
                  data: data.map(item => item.achieved)
              }
            
            ]
          });
      </script>
  

        <script>
          var data = @json($marketLinkage);
  
          Highcharts.chart('container8', {
              chart: {
                  type: 'column'
              },
              title: {
                  text: 'Market Linkage'
              },
              xAxis: {
                  categories: data.map(item => item.description)
              },
              yAxis: {
                  title: {
                      text: 'Count'
                  }
              },
              credits:{
                    // text: ' AgriFi CS APP'
                    enabled:false
                  },
  
                  plotOptions: {
                series: {
                borderWidth: 0,
                dataLabels: {
                enabled: true,
                format: '{point.y}'
                }
                }
              },
  
              series: [{
                  name: 'Target',
                  color: "#20b15e",
                  data: data.map(item => item.target)
              }, {
                  name: 'Achieved',
                  color: "#a37153",
                  data: data.map(item => item.achieved)
              }
            
            ]
          });
      </script>
  

                  

    <script>
        var data = @json($adoptionData);

        Highcharts.chart('container9', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Technology Adoption'
            },
            xAxis: {
                categories: data.map(item => item.description)
            },
            yAxis: {
                title: {
                    text: 'Count'
                }
            },
            credits:{
                  // text: ' AgriFi CS APP'
                  enabled:false
                },

                plotOptions: {
              series: {
              borderWidth: 0,
              dataLabels: {
              enabled: true,
              format: '{point.y}'
              }
              }
            },

            series: [{
                name: 'Target',
                color: "#20b15e",
                data: data.map(item => item.target)
            }, {
                name: 'Achieved',
                color: "#a37153",
                data: data.map(item => item.achieved)
            }
          
          ]
        });
    </script>

<script>
  var data = @json($directReach);

  Highcharts.chart('container10', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Direct Reach'
      },
      xAxis: {
          categories: data.map(item => item.description)
      },
      yAxis: {
          title: {
              text: 'Count'
          }
      },
      credits:{
            // text: ' AgriFi CS APP'
            enabled:false
          },

          plotOptions: {
        series: {
        borderWidth: 0,
        dataLabels: {
        enabled: true,
        format: '{point.y}'
        }
        }
      },
      
      series: [{
          name: 'Target',
          color: "#20b15e",
          data: data.map(item => item.target)
      }, {
          name: 'Achieved',
          color: "#a37153",
          data: data.map(item => item.achieved)
      }
    
    ]
  });
</script>

            


@endsection