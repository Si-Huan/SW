<template>
	<view>

		<view class='Changelog'>

			<view style='font-size:20px;'>Changelog</view>
			<view data-copy='https://github.com/WindrunnerMax/SW' class='url' bindtap='copy'>https://github.com/WindrunnerMax/SW</view>

			<view class='unitChange'>
				<view class='title'>2.9.3 (2019-08-26) [d7c93b0]</view>
				<view>1. 修复图书馆借阅超期显示问题</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.9.2 (2019-08-20) [808fc0f]</view>
				<view>1. 小程序接入公众号</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.9.1 (2019-08-16) [166793e]</view>
				<view>1. 公众号消息功能</view>
			</view>


			<view class='unitChange'>
				<view class='title'>2.8.3 (2019-08-15) [b83401a]</view>
				<view>1. 跳转迎新版</view>
				<view>2. 图标数据修正</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.8.2 (2019-08-13) [b1a81b4]</view>
				<view>1. 公众号组件</view>
				<view>2. Onlunch Event</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.8.1 (2019-08-07) [cb8dbac]</view>
				<view>1. 订阅发布模式</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.7.5 (2019-08-06) [2796d27]</view>
				<view>1. 待办事项缓存</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.7.4 (2019-08-03) [1404bc3]</view>
				<view>1. 字体图标iconfont</view>
				<view>2. 增加赞赏功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.7.3 (2019-08-02) [1f8eae3]</view>
				<view>1. Redis存储</view>
				<view>2. 增加后台管理功能</view>
				<view>3. 修复校园卡与图书馆问题</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.7.2 (2019-07-30) [0167719]</view>
				<view>1. 校园卡查询功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.7.1 (2019-7-27) [9618313]</view>
				<view>1. 校园导览功能完成</view>
				<view>2. 动态公告功能</view>
				<view>3. HTTP请求类请求头处理，响应头处理</view>
				<view>4. 小程序目录结构处理</view>
				<view>5. 后端冗余处理</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.6.2 (2019-7-23) [f429f44]</view>
				<view>1. 校园导览优化定位逻辑</view>
				<view>2. 解决注销切换用户问题</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.6.1 (2019-7-21) [d69a6f6]</view>
				<view>1. 校园导览功能上线</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.5.6 (2019-7-17) [316818d]</view>
				<view>1. API更新</view>
				<view>2. 解决分享引起的问题</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.5.5 (2019-7-16) [0c6cd5d]</view>
				<view>1. QQ小程序 山科小站--迎新专版</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.5.4 (2019-7-15) [f22f000]</view>
				<view>1. 添加自定义组件</view>
				<view>2. About界面重构</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.5.3 (2019-7-10) [d25a95e]</view>
				<view>1. 添加公告红点</view>
				<view>2. 重构日历功能</view>
				<view>3. API兼容处理(暂)</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.5.2 (2019-7-7) [34c257c]</view>
				<view>1. 更新Python版本API</view>
				<view>2. 添加PHP版本API</view>
				<view>3. 添加Java版本API</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.5.1 (2019-7-6) [36fcf0f]</view>
				<view>1. 统一版本号</view>
				<view>2. 启用备用域名</view>
				<view>3. 版本更新功能</view>
				<view>4. Application层</view>
				<view>5. 优化Http请求类结构</view>
				<view>6. 修复App的foreach问题</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.4.5 (2019-7-2) [c0d33f6]</view>
				<view>1. 缓存用户信息</view>
				<view>2. 封装的时间日期修复，拓展Date原型addDate方法</view>
				<view>3. 更改结构，加入dispose.js公共数据处理方法</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.4.4 (2019-6-27) [0f65966]</view>
				<view>1. 因后台逻辑问题共享课表只显示周次</view>
				<view>2. 处理Toast执行顺序问题</view>
				<view>3. 考试安排功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.4.3 (2019-6-25) [a64d565]</view>
				<view>1. 部分加载提示载入封装网络请求的Complete中</view>
				<view>2. 空教室排序</view>
				<view>3. 登陆时显示密码开关</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.4.2 (2019-6-24) [d813066]</view>
				<view>1. 优化APP请求逻辑</view>
				<view>2. 修复版本号问题</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.4.1 (2019-6-22) [85a5d31]</view>
				<view>1. 登录逻辑更改</view>
				<view>2. 优化封装网络请求</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.3.2 (2019-6-21) [59cecbd]</view>
				<view>1. 查询教室功能优化</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.3.1 (2019-6-19) [a0b96cf]</view>
				<view>1. 近7天空教室查询功能</view>
				<view>2. 修复部分冗余</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.2.5 (2019-6-18) [e38c011]</view>
				<view>1. 目录结构整理</view>
				<view>2. 修复时间与登录BUG</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.2.4 (2019-6-16) [3f97a7b]</view>
				<view>1. 使用Storage存储部分数据</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.2.3 (2019-6-15) [3c09247]</view>
				<view>1. 更新前后端逻辑，减少对强智的请求</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.2.2 (2019-6-13) [74ec7d2]</view>
				<view>1. 代码目录结构</view>
				<view>2. user界面重构</view>
				<view>3. 修复一些登录的问题</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.2.1 (2019-6-11) [ed5f91b]</view>
				<view>1. 减少服务器负载，本地处理数据</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.1.2 (2019-6-9) [1b33ddf]</view>
				<view>1. 待办安排功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.1.1 (2019-6-8) [f141520]</view>
				<view>1. 图标颜色问题</view>
				<view>2. 修复主页用户未授权的问题</view>
				<view>3. 增加放假安排功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.0.5 (2019-6-7) [c59e024]</view>
				<view>1. 修复GET请求编码问题(小程序+APP)</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.0.4 (2019-5-26) [d00a5b0]</view>
				<view>1. 微信小程序提供游客模式，完善校历和嵙地图功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.0.3 (2019-5-23)[ace5f30]</view>
				<view>1. 微信小程序完成教室，成绩，共享课表，图书馆，借阅，地图，校历，链接</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.0.2 (2019-5-22)[3353a8a]</view>
				<view>1. 微信小程序完成课表、用户</view>
			</view>

			<view class='unitChange'>
				<view class='title'>2.0.1 (2019-5-21) [3f51c42]</view>
				<view>1. 微信小程序开发(WXSA)</view>
				<view>2. 完成微信小程序登录、今日课程、天气</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.3.9 (2019-5-18) [B0aaa8b]</view>
				<view>1. 增加近三天天气功能，点击图标查看今日天气状态</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.3.8 (2019-5-17) [1d4f1e3]</view>
				<view>1. 优化颜色算法</view>
				<view>2. 修复课表因课重复而覆盖问题</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.3.7 (2019-5-11) [56522c5]</view>
				<view>1. 移除部分功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.3.6 (2019-5-9) [3f9c6da]</view>
				<view>1. 关闭伪静态(增加index.php)</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.3.5 (2019-5-5) [a12bf8c]</view>
				<view>1. 增加情侣课表功能</view>
				<view>2. 折叠图书馆功能块</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.3.4 (2019-5-4) [821b4b2]</view>
				<view>1. 修复图书检索为GET方式</view>
				<view>2. 课表优化代码，加入背景颜色</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.3.3 (2019-5-3) [e3d83f2]</view>
				<view>1. 增加链接分享功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.3.2 (2019-5-1) [7b4b712]</view>
				<view>1. 整理代码结构</view>
				<view>2. 完善图书馆检索与借阅查询功能</view>
				<view>3. 学校图书馆对外网开放时间大约在 7:00 - 20:00 ，图书功能在此时间段正常使用</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.3.1 (2019-4-30) [642c52f]</view>
				<view>1. 优化部分代码结构</view>
				<view>2. 建立SDUST分支(嵙分支，后期commit基本于此分支)</view>
				<view>3. 加入图书馆检索图书功能</view>
				<view>4. 加入借阅信息查询功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.2.2 (2019-4-28) [cc2f702]</view>
				<view>1. 优化代码结构，建立配置静态类</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.2.1 (2019-4-20) [80c3102]</view>
				<view>1. 内网穿透，恢复使用</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.2.0 (2019-04-11) [9903ae4] </view>
				<view>1. 增加兼容模式(兼容模式是非异步的，可能会稍有卡顿)</view>
				<view>2. 增加 更新日志 与 公告</view>
				<view>3. 使用localStorage作为本地存储</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.1.1 (2019-04-10) [02b4603] </view>
				<view>1. 增加Github入口</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.1.0 (2019-03-11) [f041eb2] </view>
				<view>1. 更改数据获取方式为异步</view>
				<view>2. 增加成绩查询与绩点计算功能</view>
			</view>

			<view class='unitChange'>
				<view class='title'>1.0.0 (2019-03-05) [-------] </view>
				<view>1. 最早是因为智校园无法使用，我无法查询自习室，在J7爬了四层楼未找到自习室，遂回宿舍封装了此Web</view>
				<view>2. 由于最初版本仅为自用，并未使用Git管理代码，所以无commit</view>
				<view>3. 服务端未保存任何信息，账号与密码全部以cookies保存在本地</view>
			</view>

		</view>

	</view>
</template>

<script>
	export default {
		data() {
			return {

			}
		},
		methods: {
			copy(e) {
				uni.setClipboardData({
					data: e.currentTarget.dataset.copy
				})
			}
		}
	}
</script>

<style>
	page{
		background: #FFFFFF;
	}
	.Changelog {
		line-height: 23px;
		word-break: break-all;
		overflow: hidden;
		padding: 10px 0px;
		border-bottom: 1px solid #eee;
		width: 100%;
	}

	.unitChange {
		margin: 20px 0;
	}

	.unitChange view {
		margin: 5px 0;
		margin-left: 5px;
	}

	.url {
		margin: 10px 0;
		color: #aaa;
	}

	.title {
		font-size: 16px;
		margin-left: 0 !important;
	}
</style>
