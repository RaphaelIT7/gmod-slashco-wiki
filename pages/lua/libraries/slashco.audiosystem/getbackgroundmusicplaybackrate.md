<function name="GetBackgroundMusicPlaybackRate" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns the current PlaybackRate of the background music.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="fallback" type="number" default="1">The fallback playbackRate to return if there currently is none</arg>
	</args>
	<rets>
		<ret name="playbackRate" type="number"></ret>
	</rets>
</function>