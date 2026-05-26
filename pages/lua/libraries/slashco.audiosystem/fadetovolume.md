<function name="FadeToVolume" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Fades the given channel to the given target volume over time
	</description>
	<realm>Client</realm>
	<args>
		<arg name="channel" type="IGModAudioChannel">The channel to use</arg>
		<arg name="fadeTime" type="number" default="1">How many second it takes to fade the volume</arg>
		<arg name="targetVol" type="number" default="1">The target volume to reach</arg>
		<arg name="callback" type="function" default="nil">The callback function called once it finished fading
			<callback>
				<arg name="channel" type="IGModAudioChannel">The channel used</arg>
				<arg name="channelData" type="table">The channel data</arg>
			</callback>
		</arg>
	</args>
</function>