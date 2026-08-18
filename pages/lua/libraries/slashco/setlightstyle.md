<function name="SetLightStyle" parent="SlashCo" type="libraryfunc">
	<description>
		Sets a light style and broadcasts an update to all clients so that their light map is updated.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="lightStyle" type="number">
			The light style index to modify.
		</arg>
		<arg name="lightPattern" type="string">
			The light pattern to apply to the light style.
		</arg>
	</args>
</function>