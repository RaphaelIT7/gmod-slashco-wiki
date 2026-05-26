<function name="FadeToPlaybackRate" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Fades the given channel to the given target playbackRate over time<br>
		<note>
			It sounds shit if you keep the channel synced like how the background channel does which is why <page>SlashCo.AudioSystem.SetBackgroundMusicPlaybackRate</page> sets the playbackRate instantly.
		</note>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="channel" type="IGModAudioChannel">The channel to use</arg>
		<arg name="fadeTime" type="number" default="3">How many second it takes to fade the playbackRate</arg>
		<arg name="targetPlaybackRate" type="number" default="1">The target playbackRate to reach</arg>
		<arg name="callback" type="function" default="nil">The callback function called once it finished fading
			<callback>
				<arg name="channel" type="IGModAudioChannel">The channel used</arg>
				<arg name="channelData" type="table">The channel data</arg>
			</callback>
		</arg>
	</args>
</function>