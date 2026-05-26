<function name="DestroyChannel" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Destroys the given channel.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="channel" type="IGModAudioChannel">The channel to destory</arg>
		<arg name="fadeOutTime" type="number" default="nil">Time in seconds on how long it takes for the channel to fade out before it's destroyed</arg>
		<arg name="callback" type="function" default="nil">The callback function after deletion
			<callback>
				<arg name="channelData" type="table">The channel data the channel had</arg>
			</callback>
		</arg>
	</args>
</function>