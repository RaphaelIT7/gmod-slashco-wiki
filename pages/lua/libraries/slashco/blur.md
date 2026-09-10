<function name="Blur" parent="SlashCo" type="libraryfunc">
	<description>
		Draws a full screen blur effect using the `pp/blurscreen` material.<br>
		Intended to be called from within a panel's `Paint` function; when a panel is given, the blur is offset to counteract that panel's local coordinate system.
	</description>
	<realm>Client</realm>
	<group>Client Utility</group>
	<args>
		<arg name="panel" type="Panel" optional>The panel to align the blur with. If omitted, the blur is drawn at `(0, 0)`.</arg>
	</args>
</function>