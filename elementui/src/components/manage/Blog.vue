<template>
  <div id="Blog">
    <el-table
      :data="tableData"
      style="width: 100%"
      stripe="true"
      size="small"
    >
      <el-table-column
        label="标题"
        width="600"
        show-overflow-tooltip="true"
        header-align="center" align="center">
        <template slot-scope="scope">
          <span style="margin-left: 10px">{{ scope.row.title }}</span>
        </template>
      </el-table-column>
      <el-table-column
        label="时间"
        width="200"
        show-overflow-tooltip="true"
        header-align="center" align="center">
        <template slot-scope="scope">
          <i class="el-icon-time"></i>
          <span style="margin-left: 10px">{{ scope.row.date }}</span>
        </template>
      </el-table-column>
      <el-table-column label="操作" header-align="center" align="center">
        <template slot-scope="scope">
          <el-button
            size="mini"
            @click="handleEdit(scope.$index, scope.row)">编辑</el-button>
          <el-button
            size="mini"
            type="danger"
            @click="handleDelete(scope.$index, scope.row)">删除</el-button>
        </template>
      </el-table-column>
    </el-table>
  </div>
</template>

<script>
    export default {
        data() {
            return {
                tableData: [{
                    id: '12987122',
                    title: '好滋好味鸡蛋仔',
                    date: '10333'
                }, {
                    id: '12987123',
                    title: '好滋好味鸡蛋仔',
                    date: '10333'
                }]
            }
        },
        methods: {
            handleEdit(index, row) {
                console.log(index, row);
            },
            handleDelete(index, row) {
                console.log(index, row);
            }
        }
    }
</script>

<style scoped>

</style>
