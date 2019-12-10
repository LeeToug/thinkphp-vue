<template>
  <div>
    <el-menu
      default-active="/manage/Home"
      class="el-menu-vertical-demo"
      background-color="#D3DCE6"
      text-color="#333"
      active-text-color="#409EFF"
      router>
      <el-menu-item index="/manage/Home" style="margin-left: -28px;">
        <template slot="title">
          <i class="el-icon-menu"></i>
          <span>首页</span>
        </template>
      </el-menu-item>
      <el-menu-item index="/manage/Blog">
        <template slot="title">
          <i class="el-icon-location"></i>
          <span>文章管理</span>
        </template>
      </el-menu-item>
      <el-menu-item index="/manage/Data">
        <i class="el-icon-tickets"></i>
        <span slot="title">数据中心</span>
      </el-menu-item>
      <el-menu-item index="/manage/Setting">
        <i class="el-icon-setting"></i>
        <span slot="title">个人中心</span>
      </el-menu-item>
      <el-menu-item index="/manage/Message">
        <i class="el-icon-more-outline"></i>
        <span slot="title">消息中心</span>
      </el-menu-item>
      <el-menu-item index="6" style="padding-left: 4px;">
        <i class="el-icon-delete"></i>
        <span slot="title">回收站</span>
      </el-menu-item>
    </el-menu>
  </div>
</template>

<script>
  // console.log(this.$route.name);
    export default {
        name: "left"
    }
</script>

<style scoped>

</style>
