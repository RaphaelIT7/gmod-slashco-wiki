<function name="SetBackgroundMusicVolume" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Sets the current volume of the background music.<br>
		<note>
			The volume will fade over `3` seconds when it's changed- it does not set it instantly.<br>
		</note>
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="volume" type="number" default="1"></arg>
	</args>
</function>