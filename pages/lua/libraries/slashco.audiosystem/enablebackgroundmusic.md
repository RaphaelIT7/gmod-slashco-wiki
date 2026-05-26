<function name="EnableBackgroundMusic" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Enables the background music again after it was disabled using <page>SlashCo.AudioSystem.DisableBackgroundMusic</page>
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="forced" type="boolean" default="false">
			Set this to `true` if you want to force enable it.
			<note>
				If the background music was disabled with `force = true` then calling this with `false` will **FAIL!**<br>
				If you want to enable the background music after it was force disabled you must set this to `true`!<br>
			</note>
		</arg>
	</args>
</function>