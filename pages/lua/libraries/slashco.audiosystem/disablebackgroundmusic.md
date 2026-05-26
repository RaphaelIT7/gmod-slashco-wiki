<function name="DisableBackgroundMusic" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Disables the background music until it's enabled again by calling <page>SlashCo.AudioSystem.EnableBackgroundMusic</page>
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="forced" type="boolean" default="false">Set this to `true` if you want to force disable it- other systems won't be able to just re-enable it.</arg>
	</args>
</function>