<template>
	<view>

		<view class="x-CenterCon">
			<image class='img' src="https://windrunner_max.gitee.io/imgpath/SDUST/SHST.jpg">
			</image>
		</view>


		<view class='userInfoCon'>
			<view class='unitInfo' style='border-top: 1px solid #eee;'>

				<view style='display:flex;'>
					<view>版本号</view>
				</view>
				<view>{{version}}</view>
			</view>

			<view class='unitInfo'>
				<view style='display:flex;'>
					<view>反馈QQ群</view>
				</view>
				<view class='link' data-copy='722942376' @tap='copy'>722942376</view>
			</view>

			<view class='unitInfo'>
				<view style='display:flex;'>
					<view>联系开发者</view>
				</view>
				<view class='link' data-copy='651525974' @tap='copy' style='display: flex;'>
					<view>651525974</view>
				</view>
			</view>

			<view class='unitInfo'>
				<view style='display:flex;'>
					<view>项目开源地址</view>
				</view>
				<view data-copy='https://github.com/WindrunnerMax/SW' @tap='copy' class='link github'>点我复制链接</view>
			</view>

			<view class='unitInfo' data-jumpurl="/pages/User/update/update" @tap='jump'>
				<view style='display:flex;'>
					<view>项目更新日志</view>
				</view>
				<view>></view>
			</view>

			<button class='unitInfo' open-type='share' style="font-size: 14px;">
				<view style='display:flex;'>
					<view>分享山科小站</view>
				</view>
				<view>></view>
			</button>

		</view>



		<view class="footer">
			<view class="text">Copyright © 2019 WindrunnerMax</view>
		</view>

	</view>
</template>

<script>
	const app = getApp()
	export default {
		data() {
			return {
				version: app.globalData.version
			}
		},
		onShareAppMessage: () => {
			var that = this;
			var shareObj = {
				title: "山科小站",
				path: '/pages/Home/tips/tips'
			}
			return shareObj;
		},
		methods: {
			copy: function(e) {
				uni.setClipboardData({
					data: e.currentTarget.dataset.copy
				})
			},
			jump: function(e) {
				uni.navigateTo({
					url: e.currentTarget.dataset.jumpurl
				})
			}
		}
	}
</script>

<style>
	page {
		padding: 0;
		background: #FFFFFF;
		font-size: 14px;
	}

	.img {
		width: 270px;
		height: 90px;
		margin-top: 20px;
	}

	.userInfoCon {
		margin-top: 27px;
		padding: 10px;
	}

	.unitInfo {
		height: 30px;
		line-height: 30px;
		border-bottom: 1px solid #eee;
		display: flex;
		justify-content: space-between;
		padding: 10px 15px;
	}

	.github {
		overflow: hidden;
		max-width: 30%;
		text-overflow: ellipsis;
	}

	.footer {
		display: flex;
		margin-top: 30px;
		justify-content: center;
	}

	.footer .text {
		color: #aaa;
	}

	.Avatar {
		height: 20px;
		width: 20px;
		border-radius: 20px;
		align-self: center;
		margin-right: 3px;
	}
</style>
