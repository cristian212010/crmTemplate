
// inicar charts 


const getOptionCharts1 = () => {


    return  {
      tooltip: {
        trigger: 'item',
        formatter: '{a} <br/>{b}: {c} ({d}%)'
      },
      legend: {
        data: [
          'Joel',
          'Amed',
          'Carlos',
          'Camila',
          'Marcela',
          'Maicol',
          'Juan',
          'Jhon',
          'Jose',
          'Others'
        ]
      },
      series: [
        {
          name: 'Access From',
          type: 'pie',
          selectedMode: 'single',
          radius: [0, '30%'],
          label: {
            position: 'inner',
            fontSize: 14
          },
          labelLine: {
            show: false
          },
          data: [
            { value: 1548, name: 'Aceros' },
            { value: 1548, name: 'Miguel' },
            { value: 1548, name: 'Marcela' },
            { value: 1548, name: 'Daniel' },
            { value: 775, name: 'Joel' },
            { value: 1548, name: 'Carlos' },
            { value: 1548, name: 'Jisas' },
            { value: 1548, name: 'Zharick' },
            { value: 1548, name: 'Cristian' },
            { value: 775, name: 'Camilo' },
            { value: 775, name: 'Juan' },
            { value: 775, name: 'Ronald' },
            { value: 679, name: 'Maicol', selected: true }
          ]
        },
        {
          name: 'Access From',
          type: 'pie',
          radius: ['45%', '60%'],
          labelLine: {
            length: 30
          },
          label: {
            formatter: '{a|{a}}{abg|}\n{hr|}\n  {b|{b}：}{c}  {per|{d}%}  ',
            backgroundColor: '#F6F8FC',
            borderColor: '#8C8D8E',
            borderWidth: 1,
            borderRadius: 4,
            rich: {
              a: {
                color: '#6E7079',
                lineHeight: 22,
                align: 'center'
              },
              hr: {
                borderColor: '#8C8D8E',
                width: '100%',
                borderWidth: 1,
                height: 0
              },
              b: {
                color: '#4C5058',
                fontSize: 14,
                fontWeight: 'bold',
                lineHeight: 33
              },
              per: {
                color: '#fff',
                backgroundColor: '#4C5058',
                padding: [3, 4],
                borderRadius: 4
              }
            }
          },
          data: [
            { value: 1048, name: 'Joel' },
            { value: 335, name: 'Juan' },
            { value: 310, name: 'Vega' },
            { value: 251, name: 'Pabon' },
            { value: 234, name: 'Miguel' },
            { value: 147, name: 'Vargas' },
            { value: 135, name: 'Ronald' },
            { value: 102, name: 'Others' }
          ]
        }
      ]
    };
        };
        
        
    

const iniciarCharts =()=>{
        const chart1= echarts.init(document.getElementById('charts1'))

        chart1.setOption(getOptionCharts1())
}


window.addEventListener('load',()=>{
    iniciarCharts()


})





  




  