<function name="GetSoundFileFromSource" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns the soundFile of a registered sound script or if it has multiple one of them randomly.<br>
		This function is specifically meant to be used for sounds registered using <link url="https://wiki.facepunch.com/gmod/sound.Add">sound.Add</link>
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="name" type="string">The sound name to lookup</arg>
	</args>
	<rets>
		<ret name="soundFile" type="string">The found sound file or `nil` on failure</ret>
	</rets>
</function>