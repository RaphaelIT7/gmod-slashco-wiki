<function name="SetCanSeeFlashlights" parent="Player" type="classfunc">
	<description>
		Sets whether the player can see flashlights.<br>
		The value is stored using the `SlashCoSeeFlashlights` networked boolean.<br>
		Item and slasher overrides may still take precedence when using <page>Player.CanSeeFlashlights</page>.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="state" type="boolean">Whether the player should be able to see flashlights</arg>
	</args>
</function>