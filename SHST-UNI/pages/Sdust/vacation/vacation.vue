<template>
	<view>
		
		<list title="节假日安排"></list>
		<view v-for="(item,index) in data" :key="index">
			<layout>
				<view class="fline">
					<view class="dot" v-bind:style="{background: colorList[index]}"></view>
					<view>{{item.name}}</view>
					<view>{{item.v_time}}</view>
				</view>
				<view class="sline">{{item.info}}</view>
			</layout>
		</view>
		
	</view>
</template>

<script>
	const app = getApp()
	export default {
		data() {
			return {
				show: 0,
				data: [],
				colorList: app.globalData.colorList
			}
		},
		onLoad() {
			var that = this
			app.ajax({
				url:app.globalData.url + "ext/vacation",
				success: (res) => {
					that.data = res.data.info
					that.show = 1
				}
			})
		},
		methods: {
			
		}
	}
</script>

<style>
	.dot{
		width: 8px;
		height: 8px;
		border-radius: 8px;
	}
	.fline{
		display: flex;
		align-items: center;
	}
	.fline view{
		margin: 5px;
		font-size: 14px;
	}
	.sline{
		margin: 1px 23px;
	}
</style>
