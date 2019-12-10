import Vue from 'vue'
import Router from 'vue-router'
import Login from '@/components/Login'
import Manage from '@/components/Manage'
import Home from '@/components/manage/Home'
import Blog from '@/components/manage/Blog'
import Data from '@/components/manage/Data'
import Setting from '@/components/manage/Setting'
import Message from '@/components/manage/Message'
import Index from '@/components/Index'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/login',
      name: 'Login',
      component: Login
    },
    // 管理端
    {
      path: '/manage',
      name: 'Manage',
      component: Manage,
      children: [
        {
          path: 'Home',//以“/”开头的嵌套路径会被当作根路径，所以子路由上不用加“/”;在生成路由时，主路由上的path会被自动添加到子路由之前，所以子路由上的path不用在重新声明主路由上的path了。
          name: 'Home',
          component: Home
        },
        {
          path: 'Blog',
          name: 'Blog',
          component: Blog
        },
        {
          path: 'Data',
          name: 'Data',
          component: Data
        },
        {
          path: 'Setting',
          name: 'Setting',
          component: Setting
        },
        {
          path: 'Message',
          name: 'Message',
          component: Message
        },
      ]
    },
    // 前端
    {
      path: '/Index',
      name: 'Manage',
      component: Manage,
      children: [
        {
          path: 'Home',//以“/”开头的嵌套路径会被当作根路径，所以子路由上不用加“/”;在生成路由时，主路由上的path会被自动添加到子路由之前，所以子路由上的path不用在重新声明主路由上的path了。
          name: 'Home',
          component: Home
        },
        {
          path: 'Blog',
          name: 'Blog',
          component: Blog
        },
        {
          path: 'Data',
          name: 'Data',
          component: Data
        },
        {
          path: 'Setting',
          name: 'Setting',
          component: Setting
        },
        {
          path: 'Message',
          name: 'Message',
          component: Message
        },
      ]
    }
  ]
})
