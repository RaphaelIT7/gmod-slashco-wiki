<function name="SetVisible" parent="Player" type="classfunc">
	<description>
		Sets the player's base visibility state.<br>
		This state is stored using the `SlashCoVisible` networked boolean.<br>
		This does not directly account for item or slasher visibility overrides.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="state" type="boolean">Whether the player should be marked as visible</arg>
	</args>
</function>