<template>
  <div class='grid grid-col-2 mx-8 lg:mx-16 mt-6'>
    <div class='justify-self-center'>
      <div class='w-full shadow-xl p-8 lg:p-16 bg-white'>
        <div class="flex justify-center">
          <p class="text-2xl font-bold">Vehicle Status By City</p>
        </div>
        <!-- <ul>
           <li v-for='(vehicle, index) in vehicles' :key='index'>
                {{ vehicle.title }}
            </li>
        </ul> -->
        <apexchart
          width='500'
          type='bar'
          :options='options'
          :series='series'
        ></apexchart>

        <p class='mt-4 text-sm font-light'>
          * You can download the graph by clicking the button on the top right.
        </p>
      </div>
      <div class='w-full shadow-xl p-8 lg:p-16 bg-white'>
        <div class="flex justify-center">
          <p class="text-2xl font-bold">Vehicle Percentages By City</p>
        </div>
        <apexchart class="mt-6" type="donut" :options="chartOptions" :series="series1"></apexchart>
      </div>
    </div>
  </div>
</template>

<script>
// import VueApexCharts from 'vue-apexcharts'

export default {
  components: {},
  data: function () {
    return {
      options: {
        chart: {
          id: 'CarsByCities'
        },
        xaxis: {
          categories: []
        }
      },
      series: [
        {
          name: 'Available Cars',
          data: []
        },
        {
          name: 'Unavailable Cars',
          data: []
        }
      ],
      series1: [],
      chartOptions: {
        chart: {
          width: 380,
          type: 'donut',
          dropShadow: {
            enabled: true,
            color: '#111',
            top: -1,
            left: 3,
            blur: 3,
            opacity: 0.2
          }
        },
        dataLabels: {
          dropShadow: {
            blur: 3,
            opacity: 0.8
          }
        },
        theme: {
          palette: 'palette2'
        },
        labels: [],
        stroke: {
          width: 0
        },
        fill: {
          type: 'pattern',
          opacity: 1,
          pattern: {
            enabled: true,
            style: ['verticalLines', 'squares', 'horizontalLines', 'circles', 'slantedLines']
          }
        },
        plotOptions: {
          pie: {
            donut: {
              labels: {
                show: true,
                total: {
                  showAlways: true,
                  show: true
                }
              }
            }
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
      }
    }
  },
  computed: {
    vehicles () {
      return this.$store.getters.allVehicles
    },
    locations () {
      return this.$store.getters.allLocations
    }
  },
  beforeMount () {
    const tableValues = {
      ankara: {
        available: 0,
        unavailable: 0,
        total: 0
      },
      antalya: {
        available: 0,
        unavailable: 0,
        total: 0
      },
      istanbul: {
        available: 0,
        unavailable: 0,
        total: 0
      },
      izmir: {
        available: 0,
        unavailable: 0,
        total: 0
      },
      konya: {
        available: 0,
        unavailable: 0,
        total: 0
      },
      adana: {
        available: 0,
        unavailable: 0,
        total: 0
      },
      bursa: {
        available: 0,
        unavailable: 0,
        total: 0
      },
      gaziantep: {
        available: 0,
        unavailable: 0,
        total: 0
      }
    }

    for (const vehicle of this.vehicles) {
      if (vehicle.available === 1) {
        for (const loc of vehicle.locations) {
          if (loc.title === 'Ankara') {
            tableValues.ankara.available++
            tableValues.ankara.total++
          } else if (loc.title === 'Antalya') {
            tableValues.antalya.available++
            tableValues.antalya.total++
          } else if (loc.title === 'Istanbul') {
            tableValues.istanbul.available++
            tableValues.istanbul.total++
          } else if (loc.title === 'Izmir') {
            tableValues.izmir.available++
            tableValues.izmir.total++
          } else if (loc.title === 'Konya') {
            tableValues.konya.available++
            tableValues.konya.total++
          } else if (loc.title === 'Adana') {
            tableValues.adana.available++
            tableValues.adana.total++
          } else if (loc.title === 'Bursa') {
            tableValues.bursa.available++
            tableValues.bursa.total++
          } else if (loc.title === 'Gaziantep') {
            tableValues.gaziantep.available++
            tableValues.gaziantep.total++
          }
        }
      } else {
        for (const loc of vehicle.locations) {
          if (loc.title === 'Ankara') {
            tableValues.ankara.unavailable++
            tableValues.ankara.total++
          } else if (loc.title === 'Antalya') {
            tableValues.antalya.unavailable++
            tableValues.antalya.total++
          } else if (loc.title === 'Istanbul') {
            tableValues.istanbul.unavailable++
            tableValues.istanbul.total++
          } else if (loc.title === 'Izmir') {
            tableValues.izmir.unavailable++
            tableValues.izmir.total++
          } else if (loc.title === 'Konya') {
            tableValues.konya.unavailable++
            tableValues.konya.total++
          } else if (loc.title === 'Adana') {
            tableValues.adana.unavailable++
            tableValues.adana.total++
          } else if (loc.title === 'Bursa') {
            tableValues.bursa.unavailable++
            tableValues.bursa.total++
          } else if (loc.title === 'Gaziantep') {
            tableValues.gaziantep.unavailable++
            tableValues.gaziantep.total++
          }
        }
      }
    }

    for (const loc of this.locations) {
      this.options.xaxis.categories.push(loc.title)
      this.chartOptions.labels.push(loc.title)
    }

    this.series[0].data.push(tableValues.ankara.available)
    this.series[1].data.push(tableValues.ankara.unavailable)
    this.series[0].data.push(tableValues.antalya.available)
    this.series[1].data.push(tableValues.antalya.unavailable)
    this.series[0].data.push(tableValues.istanbul.available)
    this.series[1].data.push(tableValues.istanbul.unavailable)
    this.series[0].data.push(tableValues.izmir.available)
    this.series[1].data.push(tableValues.izmir.unavailable)
    this.series[0].data.push(tableValues.konya.available)
    this.series[1].data.push(tableValues.konya.unavailable)
    this.series[0].data.push(tableValues.adana.available)
    this.series[1].data.push(tableValues.adana.unavailable)
    this.series[0].data.push(tableValues.bursa.available)
    this.series[1].data.push(tableValues.bursa.unavailable)
    this.series[0].data.push(tableValues.gaziantep.available)
    this.series[1].data.push(tableValues.gaziantep.unavailable)

    this.series1.push(tableValues.ankara.total)
    this.series1.push(tableValues.antalya.total)
    this.series1.push(tableValues.istanbul.total)
    this.series1.push(tableValues.izmir.total)
    this.series1.push(tableValues.konya.total)
    this.series1.push(tableValues.adana.total)
    this.series1.push(tableValues.bursa.total)
    this.series1.push(tableValues.gaziantep.total)
  }
}
</script>
