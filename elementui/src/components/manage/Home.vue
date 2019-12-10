<template>
  <div>
    <el-row :gutter="20">
      <el-col :span="6"><div class="grid-content bg-purple">
        文章总数
      </div></el-col>
      <el-col :span="6"><div class="grid-content bg-purple">
        评论数
      </div></el-col>
      <el-col :span="6"><div class="grid-content bg-purple">
        点赞数
      </div></el-col>
      <el-col :span="6"><div class="grid-content bg-purple">
        粉丝数
      </div></el-col>
      <el-col :span="6"><div class="grid-content bg-purple">
        阅读数
      </div></el-col>
      <el-col :span="6"><div class="grid-content bg-purple">
        收藏数
      </div></el-col>
    </el-row>

    <div id="chartColumn" style="margin-top:50px;width:100%; height:400px"></div>
  </div>
</template>

<script>
    export default {
        data(){
            return {
                chartColumn: null
            }
        },
        mounted() {
            this.drawLine();
        },
        methods: {
            drawLine(){
                this.chartColumn = this.$echarts.init(document.getElementById('chartColumn'));

                this.chartColumn.setOption({
                    title: { text: '阅读数' },
                    tooltip: {},
                    xAxis: {
                        type: 'category',
                        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                    },
                    yAxis: {
                        type: 'value'
                    },
                    series: [{
                        data: [1600, 932, 901, 934, 1290, 1330, 1320],
                        type: 'line',
                        smooth:true
                    }]
                });
            }
        }
    }
</script>

<style>
  .el-row {
    margin-bottom: 20px;
  }
  .el-col {
    border-radius: 4px;
    margin-top: 20px;
  }
  .bg-purple-dark {
    background: #99a9bf;
  }
  .bg-purple {
    background: #d3dce6;
  }
  .bg-purple-light {
    background: #e5e9f2;
  }
  .grid-content {
    border-radius: 20px;
    min-height: 130px;
  }
  .row-bg {
    padding: 10px 0;
    background-color: #f9fafc;
  }
</style>
