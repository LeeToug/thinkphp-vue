<template>
  <div>
    <span style="float: left;width: 80%;text-align:left;font-size: x-large">
    博客管理系统
  </span>
    <el-dropdown style="float: right">
      <el-button type="primary">
        Admin<i class="el-icon-arrow-down el-icon--right"></i>
      </el-button>
      <el-dropdown-menu slot="dropdown">
        <el-dropdown-item>修改密码</el-dropdown-item>
        <el-dropdown-item>设置</el-dropdown-item>
        <el-dropdown-item>注销</el-dropdown-item>
      </el-dropdown-menu>
    </el-dropdown>
  </div>
</template>

<script>
    export default {
        name: "header"
    }
</script>

<style scoped>

</style>
