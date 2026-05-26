<function name="SetBackgroundMusic" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Sets the current soundFile and volume of the background music.<br>
		<note>
			The volume will fade over `3` seconds when it's changed- it does not set it instantly.<br>
			**IMPORTANT** You should **NOT** call this function every tick! If you want to adjust the volume every frame use <page>SlashCo.AudioSystem.SetBackgroundMusicVolume</page>
		</note>
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="soundFile" type="string">The new soundFile</arg>
		<arg name="volume" type="number" default="1"></arg>
	</args>
</function>