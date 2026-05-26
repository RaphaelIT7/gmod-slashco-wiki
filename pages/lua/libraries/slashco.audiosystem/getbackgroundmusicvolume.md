<function name="GetBackgroundMusicVolume" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns the current volume of the background music.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="fallback" type="number" default="1">The fallback volme to return if there currently is none</arg>
	</args>
	<rets>
		<ret name="volume" type="number"></ret>
	</rets>
</function>